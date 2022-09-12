<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
	public function enterEmail()
	{
		return view('auth.password.enter-email');
	}

	public function sentEmail(ResetPasswordRequest $request)
	{
		$request->validate(['email' => 'required|email']);

		$token = Str::random(64);

		DB::table('password_resets')->insert([
			'email'      => $request->email,
			'token'      => $token,
			'created_at' => Carbon::now(),
		]);

		Mail::send('auth.password.message', ['token'=>$token], function ($message) use ($request) {
			$message->to($request->email);
			$message->subject('Reset Password');
		});

		return view('auth.password.check-email');
	}

	public function enterNewPassword($token)
	{
		return view('auth.password.enter-new-passwords', [
			'token' => $token,
		]);
	}

	public function updatePassword(ResetPasswordRequest $request)
	{
		$request->validate([
			'token'                 => 'required',
			'password'              => 'required|min:4|confirmed',
			'password_confirmation' => 'required',
		]);

		$updatePassword = DB::table('password_resets')->first();

		if (!$updatePassword)
		{
			return back()->withInput()->with('error', 'Invalid token!');
		}

		User::where('email', $updatePassword->email)
			->update(['password'=>Hash::make($request->password)]);

		DB::table('password_resets')->where(['email'=>$updatePassword->email])->delete();

		return view('auth.password.reset-success');
	}
}