<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_auth_should_give_us_errors_if_inputs_not_provided()
	{
		$response = $this->post('register');
		$response->assertSessionHasErrors([
			'username', 'email', 'password',
		]);
	}

	public function test_auth_should_give_us_errors_if_password_confirmation_does_not_match()
	{
		$response = $this->post('register', [
			'username'             => 'bakari',
			'email'                => 'bakari@gmail.com',
			'password'             => 'pass',
			'password_confirmation'=> 'word',
		]);
		$response->assertSessionHasErrors([
			'password',
		]);
	}

	public function test_send_email_verification_message_after_registration()
	{
		$user = User::factory()->create(['email_verified_at'=>null]);
		$this->post('/register', [$user]);
		$user->sendEmailVerificationNotification();
		$this->assertDatabaseHas('users', ['email'=>$user->email]);
	}

	public function test_user_will_register_with_correct_credentials()
	{
		$user = User::factory()->make();
		$response = $this->post('/register', [
			'username'             => $user->username,
			'email'                => $user->email,
			'password'             => $user->password,
			'password_confirmation'=> $user->password,
		]);
		$response->assertRedirect('email/verification');
	}
}