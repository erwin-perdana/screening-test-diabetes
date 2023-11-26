<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use App\Models\TestDetail;
use App\Models\User;
use Carbon\Carbon;
use DateTime;

class AdminDashboardController extends Controller
{
    public function dashboard(){
        $activeUser = User::where('role', 'User')->count();

        //get option gender
        $genderQuestion = Question::with('options')->skip(1)->first();
        $female = $genderQuestion->options[0]->id;
        $male = $genderQuestion->options[1]->id;
        
        //count gender in test
        $femaleCount = 0;
        $maleCount = 0;
        $countedIds = [];
        $tests = Test::with(['user', 'testDetails' => function ($query) use ($female, $male) {
            $query->whereIn('option_id', [$female, $male]);
        }])->get();

        $locations = [];

        foreach ($tests as $test) {
            if(!in_array($test->user_id, $countedIds)) {
                foreach ($test->testDetails as $testDetail) {
                    if($testDetail->option_id == $female) {
                        $femaleCount++;
                    } else {
                        $maleCount++;
                    }
                }

                $countedIds[] = $test->user_id;
            }
            if(!array_key_exists($test->user->address, $locations)) {
                $locations[$test->user->address] = 1;
            } else {
                $locations[$test->user->address] += 1;
            }
            
        }

        $year = Carbon::parse(Carbon::now())->format('Y');
        $userAMonth = [];

        for ($i=1; $i <= 12; $i++) { 
            $count = Test::whereYear('date', $year)
            ->whereMonth('date', $i)
            ->count();

            $userAMonth[] = $count;
        }

        return view('admin.dashboard.index', compact('activeUser', 'femaleCount', 'maleCount', 'userAMonth', 'locations'));
    }

    public function user(){
        $users = User::where('role', 'User')->get();

        return view('admin.user.index', compact('users'));
    }

    public function response(){
        $testDetails = TestDetail::with('test.user','option')->get();

        return view('admin.response.index', compact('testDetails'));
    }

    public function result(){
        $tests = Test::with('testDetails','user')->get();

        return view('admin.result.index', compact('tests'));
    }
}
