<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VerificationController extends Controller
{
	public function notice(): View
	{
		return view('auth.email.verify');
	}

	public function verify(EmailVerificationRequest $request): RedirectResponse
	{
		$request->fulfill();
		return redirect()->route('email.verified');
	}
}