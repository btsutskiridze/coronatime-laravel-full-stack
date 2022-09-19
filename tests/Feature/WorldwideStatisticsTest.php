<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorldwideStatisticsTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_redirect_to_login_page_if_not_authorized_on_visiting_worldwide_statistics_page()
	{
		$response = $this->get('worldwide');
		$response->assertRedirect('login');
	}

	public function test_visit_worldwide_page_when_email_not_verified_shoud_redirect_to_login_page()
	{
		$user = User::factory()->create(['email_verified_at'=>null]);
		$response = $this->actingAs($user)->get('worldwide');
		$response->assertRedirect('/login');
	}

	public function test_visit_worldwide_page_successfully()
	{
		$response = $this->actingAs($this->user)->get('worldwide');
		$response->assertSuccessful();
	}
}