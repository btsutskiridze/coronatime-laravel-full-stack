<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
	public function register(RegisterRequest $request): RedirectResponse
	{
		$user = User::create([
			'username' => $request->username,
			'email'    => $request->email,
			'password' => bcrypt($request->password),
		]);

		event(new Registered($user));

		auth()->login($user);
		return redirect()->route('email.verify');
	}

	public function login(LoginRequest $request): RedirectResponse
	{
		$remember = $request->has('remember') ? true : false;

		$nameInput = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$request->merge([$nameInput => $request->username]);

		if (!auth()->attempt($request->only($nameInput, 'password'), $remember)
		) {
			throw ValidationException::withMessages([
				'password'=> 'password_not_found',
			]);
		}
		elseif (auth()->user()->email_verified_at === null)
		{
			auth()->logout();
			throw ValidationException::withMessages([
				'username'=> 'user_has_not_verified_email',
			]);
		}
		return redirect()->route('worldwide.show');
	}

	public function logout(): RedirectResponse
	{
		session()->flush();
		auth()->logout();
		return redirect('/');
	}
}