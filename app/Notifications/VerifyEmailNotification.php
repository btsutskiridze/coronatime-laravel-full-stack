<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class VerifyEmailNotification extends VerifyEmail
{
	protected function buildMailMessage($url): MailMessage
	{
		return (new MailMessage)
			->subject(Lang::get('Verify Email Address'))
			->line(Lang::get('Please click the button below to verify your email address.'))
			->view('auth.email.message', [
				'url'=> $url,
			])
			->action(Lang::get('Verify Email'), $url);
	}
}