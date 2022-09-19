<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ChangeLanguageTest extends TestCase
{
	use RefreshDatabase;

	public function test_user_can_set_georgian_language()
	{
		$response = $this->get('language/ka')->assertRedirect('/');
		$response->assertSessionHas('lang', 'ka');
	}

	public function test_user_cannot_set_other_language_then_georgian_and_english()
	{
		$response = $this->get('language/es')->assertRedirect('/');
		$response->assertSessionHas('lang', 'en');
	}
}