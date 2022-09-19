<?php

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_user_sees_message_when_verification_is_sent()
	{
		$user = User::factory()->make(['email_verified_at'=>null]);
		$this->post(route('register', [
			'username'             => $user->username,
			'email'                => $user->email,
			'password'             => $user->password,
			'password_confirmation'=> $user->password,
		]));

		$this->get(route('verification.notice'))->assertViewIs('auth.email.verify');
	}

	public function test_user_verified_email()
	{
		Notification::fake();
		$user = User::factory()->make([
			'username'         => 'bakar',
			'email'            => 'bakar@redberry.ge',
			'password'         => bcrypt('thisPass'),
			'email_verified_at'=> null,
		]);
		$this->assertFalse($user->hasVerifiedEmail());

		$this->post(route('register', [
			'username'             => $user->username,
			'email'                => $user->email,
			'password'             => $user->password,
			'password_confirmation'=> $user->password,
		]));

		$user = User::where('username', 'bakar')->first();

		Notification::assertSentTo(
			[$user],
			VerifyEmailNotification::class
		);

		$this->assertFalse($user->hasVerifiedEmail());

		$notification = Notification::sent($user, VerifyEmailNotification::class)->first();
		$activationUrl = $notification->toMail($user)->actionUrl;
		$response = $this->get($activationUrl);
		$response->assertRedirect('email/verified');

		$user->refresh();
		$this->assertTrue($user->hasVerifiedEmail());
	}
}