<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
    public function dashboard() {
        $nextFiveYear = Carbon::now()->addYear(5);
        $testDate = Carbon::parse($nextFiveYear)->format('d F Y');
        // cek jika blm pernah test
        $test = Test::where('user_id', Auth::id())->first();
        $schedule = Schedule::where('user_id', Auth::id())->latest()->first();
        if(!isset($test)) {
            $show = "start_test";
        } else {
            if(isset($schedule) && $schedule->isTaken == false) {
                if(Carbon::parse($schedule->date)->isSameDay(Carbon::now())){
                    $show = "start_test";
                } else {
                    $show = "wait_test";
                }
            }else{
                $show = "reminder";
            }
        }

        return view('user.dashboard.index', compact('schedule', 'show', 'testDate'));
    }

    public function setReminder() {
        $nextFiveYear = Carbon::now()->addYear(5);
        $testDate = Carbon::parse($nextFiveYear)->format('d F Y');
        return view('user.test.reminder', compact('testDate'));
    }

    public function storeReminder(Request $request) {
        $nextFiveYear = Carbon::now()->addYear(5);

        DB::beginTransaction();

        try {
            if($request->choose == "yes") {
                Schedule::create([
                    'user_id' => Auth::id(),
                    'date' => $nextFiveYear,
                    'isTaken' => false
                ]);

                DB::commit();
            }

            return redirect()->route('user.dashboard');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return back();
        }
    }

    public function resultRisk() {
        $test = Test::with('testDetails')->where('user_id', Auth::id())->latest()->first();
        $poin = $test->testDetails->sum('poin');

        return view('user.test.result_risk', compact('test','poin'));
    }
}
