<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_login_page_is_not_accessible()
	{
		$response = $this->get('/login');
		$response->assertSuccessful();
		$response->assertSee('Welcome Back');
		$response->assertViewIs('sessions.login');
	}

	public function test_auth_should_give_us_errors_if_input_is_not_provided()
	{
		$response = $this->post('/login');
		$response->assertSessionHasErrors([
			'username',
			'password',
		]);
	}

	public function test_auth_should_give_us_email_error_if_we_wont_provide_email_input()
	{
		$response = $this->post('/login', [
			'password'=> 'ssshhhhhh',
		]);
		$response->assertSessionHasErrors([
			'username',
		]);

		$response->assertSessionDoesntHaveErrors([
			'password',
		]);
	}

	public function test_auth_should_give_us_password_error_if_we_wont_provide_password_input()
	{
		$response = $this->post('/login', [
			'username'=> 'bakari',
		]);
		$response->assertSessionHasErrors([
			'password',
		]);
	}

	public function test_auth_should_give_us_email_error_when_email_field_is_not_correct()
	{
		$response = $this->post('/login', [
			'username'=> 'ba',
		]);

		$response->assertSessionHasErrors([
			'username',
		]);
	}

	public function test_auth_should_give_us_credentials_error_when_such_user_does_not_exists()
	{
		$response = $this->post('/login', [
			'username'=> 'bakar',
			'password'=> 'password',
		]);

		$response->assertSessionHasErrors([
			'username',
		]);
		$this->assertTrue(session()->hasOldInput('username'));
		$this->assertFalse(session()->hasOldInput('password'));
		$this->assertGuest();
	}

	public function test_auth_should_give_us_error_if_password_is_incorrect()
	{
		$user = User::factory()->create();

		$response = $this->post('/login', [
			'username'    => $user->username,
			'password'    => 'incorrectpass',
		]);

		$response->assertSessionHasErrors([
			'password'=> 'The password you entered is invalid',
		]);
	}

	public function test_auth_can_login_with_correct_credentials()
	{
		$user = User::factory()->create([
			'password' => bcrypt($password = 'reddberry'),
		]);

		$response = $this->post('/login', [
			'username'    => $user->username,
			'password'    => $password,
		]);

		$response->assertRedirect('/worldwide');
		$this->assertAuthenticatedAs($user);
	}

	public function test_when_user_is_not_logged_in_do_not_let_him_to_logout_route()
	{
		$this->get('/logout')->assertRedirect('login');
	}

	public function test_user_can_successfully_logout()
	{
		$this->actingAs($this->user)->get('logout')->assertRedirect('/');
	}

	public function test_user_will_redirect_to_login_page_if_email_not_verified()
	{
		$user = User::factory()->create([
			'email_verified_at'=> null,
			'password'         => bcrypt($password = 'reddberry'),
		]);

		$response = $this->post('/login', [
			'username'    => $user->username,
			'password'    => $password,
		]);

		$response->assertSessionHasErrors(['username'=> 'user_has_not_verified_email']);
	}
}