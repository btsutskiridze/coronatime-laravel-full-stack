<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CovidApiCommandTest extends TestCase
{
	use RefreshDatabase;

	public function test_example()
	{
		Http::fake([
			'https://devtest.ge/countries' => Http::response(json_encode([
				[
					'code' => 'GE',
					'name' => [
						'ka' => 'საქართველო',
						'en' => 'Georgia',
					],
				],
			])),
			'https://devtest.ge/get-country-statistics' => Http::response(json_encode([
				'id'           => 1,
				'country'      => 'Gorgia',
				'code'         => 'GE',
				'confirmed'    => 200,
				'deaths'       => 1,
				'recovered'    => 37,
			]), 200, ['HEADERS']),
		]);
		$this->artisan('request:countries')->assertSuccessful();
	}
}