<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
	public function notice()
	{
		return view('auth.email.verify');
	}

	public function verify(EmailVerificationRequest $request)
	{
		$request->fulfill();

		return redirect()->route('email.verified');
	}
}
