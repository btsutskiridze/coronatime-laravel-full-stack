<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ResetPasswordController extends Controller
{
	public function enterEmail(): View
	{
		return view('auth.password.enter-email');
	}

	public function sentEmail(Request $request): view
	{
		$request->validate(['email' => 'required|exists:users,email']);

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

	public function enterNewPassword($token): view
	{
		return view('auth.password.enter-new-passwords', [
			'token' => $token,
		]);
	}

	public function updatePassword(Request $request): view|RedirectResponse
	{
		$request->validate([
			'token'                 => 'required',
			'email'                 => 'required|exists:users,email',
			'password'              => 'required|min:4|confirmed',
			'password_confirmation' => 'required',
		]);

		$updatePassword = DB::table('password_resets')
			->where([
				'email' => $request->email,
				'token' => $request->token,
			])
			->first();

		if (!$updatePassword)
		{
			throw ValidationException::withMessages([
				'error'=> 'Invalid token!',
			]);
		}

		User::where('email', $updatePassword->email)
			->update(['password'=>Hash::make($request->password)]);

		DB::table('password_resets')->where(['token'=>$request->token])->delete();

		return view('auth.password.reset-success');
	}
}