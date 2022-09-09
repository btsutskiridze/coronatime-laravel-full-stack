<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
	public function register(RegisterRequest $request)
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

	public function login(LoginRequest $request)
	{
		if (!auth()->attempt([
			$this->usernameOrEmail($request->username)   => $request->username,
			'password'                                   => $request->password, ])
		) {
			throw ValidationException::withMessages([
				'password'=> 'invalid',
			]);
		}

		return redirect()->route('worldwide.show');
	}

	public function logout()
	{
		auth()->logout();
		return redirect('/');
	}

	protected function usernameOrEmail($par): string
	{
		return filter_var($par, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
	}
}