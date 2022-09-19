<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class CovidApiCommandTest extends TestCase
{
	use RefreshDatabase;

	public function test_example()
	{
		$this->artisan('request:countries');
		$this->assertTrue(DB::table('country_statistics')->count() > 90);
	}
}