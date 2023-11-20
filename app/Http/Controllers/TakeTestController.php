<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Schedule;
use App\Models\Test;
use App\Models\TestDetail;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TakeTestController extends Controller
{
    public function testStart(){
        $questions = Question::with('options')->get();

        return view('user.test.start', compact('questions'));
    }

    public function testStore(Request $request){
        if(count($request->answers) == 11) {
            DB::beginTransaction();

            try {
                $test = Test::where('user_id', Auth::id())->first();
                if(isset($test)) {
                    $schedule = Schedule::where('user_id', Auth::id())->latest()->first();
                }
                // save test
                $test = Test::create([
                    'schedule_id' => isset($test) ? $schedule->id : null,
                    'date' => Carbon::now(),
                    'user_id' => Auth::id()
                ]);

                foreach ($request->answers as $key => $answer) {
                    $option = Option::with('question')->find($answer);
                    
                    $poin = 0;
                    if($key + 1 == count($request->answers)) {
                        $secondQuestionOption = Option::find($request->answers[1]);
                        $thirdQuestionOption = Option::find($request->answers[2]);
                        $fourthQuestionOption = Option::find($request->answers[3]);
                        
                        if($thirdQuestionOption->poin != 0 || $fourthQuestionOption->poin != 0) {
                            if($secondQuestionOption->poin == 0) {
                                if ($answer > 100) {
                                    $poin += 7;
                                } elseif ($answer >= 90 && $answer <= 100) {
                                    $poin += 4;
                                }
                            } else {
                                if ($answer > 90) {
                                    $poin += 7;
                                } elseif ($answer >= 80 && $answer <= 90) {
                                    $poin += 4;
                                }
                            }
                        } else {
                            if($secondQuestionOption->poin == 0) {
                                if ($answer > 110) {
                                    $poin += 7;
                                } elseif ($answer >= 102 && $answer <= 110) {
                                    $poin += 4;
                                }
                            } else {
                                if ($answer > 100) {
                                    $poin += 7;
                                } elseif ($answer >= 99 && $answer <= 100) {
                                    $poin += 4;
                                }
                            }
                        }
                    }

                    TestDetail::create([
                        'test_id' => $test->id,
                        'option_id' => isset($option) ? $option->id : null,
                        'poin' => $key + 1 == count($request->answers) ? $poin : $option->poin,
                        'option_information' => $key + 1 == count($request->answers) ? $answer : null
                    ]);
                }

                DB::commit();

                return redirect()->route('user.test.result', $test->id);
            } catch (\Throwable $th) {
                DB::rollBack();
                return redirect()->route('user.dashboard');
            }
        }
    }

    public function testResult(Test $test) {
        // hitung total point
        $poin = $test->testDetails->sum('poin');

        return view('user.test.result', compact('poin'));
    }
}
