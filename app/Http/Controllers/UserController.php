<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateCredentialRequest;
use App\Http\Requests\UserUpdateIdentityRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function profile() {
        $cities = File::json(storage_path().'/app/public/regencies.json');
        $user = Auth::user();

        return view('user.profile.index', compact('user', 'cities'));
    }

    public function profileUpdateIdentity(UserUpdateIdentityRequest $request) {
        $validated = $request->validated();

        DB::beginTransaction();

        try {
            User::find(Auth::id())->update($validated);

            DB::commit();
            return redirect()->route('user.profile');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back();
        }
    }

    public function profileUpdateCredential(UserUpdateCredentialRequest $request) {
        $validated = $request->validated();

        DB::beginTransaction();

        try {
            if(!Hash::check($validated['old_password'], Auth::user()->getAuthPassword())) return back();

            User::find(Auth::id())->update([
                'password' => Hash::make($validated['password'])
            ]);

            DB::commit();
            return redirect()->route('user.profile');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back();
        }
    }
    
}
