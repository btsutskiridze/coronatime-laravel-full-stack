<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class removeUnverifiedUsersTest extends TestCase
{
	use RefreshDatabase;

	public function test_remove_unverified_users()
	{
		User::factory(10)->create();
		User::factory()->create(['email_verified_at'=>null]);
		$this->artisan('remove:unverifiedUsers')->assertSuccessful();
	}
}