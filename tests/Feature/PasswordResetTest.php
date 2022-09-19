<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;
use Illuminate\Support\Str;

class PasswordResetTest extends TestCase
{
	use WithFaker,RefreshDatabase;

	const ROUTE_PASSWORD_EMAIL = 'forgot_password.enter_email';

	const ROUTE_PASSWORD_REQUEST = 'forgot_password.sent_email';

	const ROUTE_PASSWORD_RESET = 'reset_password.reset';

	const ROUTE_PASSWORD_RESET_SUBMIT = 'reset_password.update';

	const USER_ORIGINAL_PASSWORD = 'secret';

	public function test_show_password_reset_requestPage()
	{
		$this
			->get(route(self::ROUTE_PASSWORD_REQUEST))
			->assertSuccessful()
			->assertSee('Reset password');
	}

	public function test_submit_password_request_invalid_email()
	{
		$response = $this->post(route(self::ROUTE_PASSWORD_EMAIL), [
			'email' => 'nonexistencegmail.com',
		]);

		$response->assertSessionHasErrors('email');
	}

	public function test_submit_password_request_email_not_found()
	{
		$response = $this->post(route(self::ROUTE_PASSWORD_EMAIL), [
			'email' => $this->faker->unique()->safeEmail(),
		]);

		$response->assertSessionHasErrors('email');
	}

	public function test_submit_password_request_sent()
	{
		Notification::fake();
		$user = User::factory()->create();
		$response = $this->post(route(self::ROUTE_PASSWORD_EMAIL), [
			'email' => $user->email,
		]);

		$response->assertSuccessful();
		$response->assertViewIs('auth.password.check-email');
	}

	public function test_show_password_reset_page()
	{
		User::factory()->create();
		$token = Str::random(64);
		$response = $this->get(route(self::ROUTE_PASSWORD_RESET, [
			'token' => $token,
		]));
		$response->assertSuccessful();
		$response->assertViewIs('auth.password.enter-new-passwords');
	}

	public function test_submit_password_reset_passwords_do_not_match()
	{
		$user = User::factory()->create([
			'password' => bcrypt(self::USER_ORIGINAL_PASSWORD),
		]);

		$token = Str::random(64);

		$password = Str::random(6);

		$response = $this->post(route(self::ROUTE_PASSWORD_RESET_SUBMIT), [
			'token'                 => $token,
			'email'                 => $user->email,
			'password'              => $password,
			'password_confirmation' => 'noMatch',
		]);

		$response->assertSessionHasErrors(['password']);
	}

	public function test_submit_password_token_does_not_exists()
	{
		$user = User::factory()->create([
			'password' => bcrypt(self::USER_ORIGINAL_PASSWORD),
		]);
		$token = Str::random(64);
		$password = Str::random(7);
		//not adding token and email in password_resets migration

		$this->post(route(self::ROUTE_PASSWORD_RESET_SUBMIT), [
			'token'                 => $token,
			'email'                 => $user->email,
			'password'              => $password,
			'password_confirmation' => $password,
		])->assertSessionHasErrors(['error'=>'Invalid token!']);
	}

	public function test_submit_password_reset()
	{
		$user = User::factory()->create([
			'password' => bcrypt(self::USER_ORIGINAL_PASSWORD),
		]);
		$token = Str::random(64);
		$password = Str::random(7);
		DB::insert('insert into password_resets (email, token) values (?, ?)', [$user->email, $token]);

		$this->post(route(self::ROUTE_PASSWORD_RESET_SUBMIT), [
			'token'                 => $token,
			'email'                 => $user->email,
			'password'              => $password,
			'password_confirmation' => $password,
		])
			->assertSuccessful()->assertViewIs('auth.password.reset-success');

		$user->refresh();
		$this->assertFalse(Hash::check(
			self::USER_ORIGINAL_PASSWORD,
			$user->password
		));
		$this->assertTrue(Hash::check($password, $user->password));
	}
}