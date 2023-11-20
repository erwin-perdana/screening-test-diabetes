<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    public function register(){
        $cities = File::json(storage_path().'/app/public/regencies.json');

        return view('auth.register', compact('cities'));
    }

    public function registerProces(RegisterRequest $request){
        $validated = $request->validated();

        DB::beginTransaction();

        try {
            $validated['password'] = Hash::make($validated['password']);
            $validated['role'] = "User";

            User::create($validated);
            DB::commit();
            return redirect()->route('login');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('register');
        }
    }

    public function login(){
        if(Auth::check()){
            return redirect()->route('home');
        }else{
            return view('auth.login');
        }
    }

    public function loginProces(LoginRequest $request)
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            $user = User::where('email', $validated['email'])->first();
            // redirect berdasarkan role
            if($user->role == "Admin") return redirect()->route('admin.dashboard');

            return redirect()->route('user.dashboard');
        }

        return back()->with('status', 'Email atau Password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
