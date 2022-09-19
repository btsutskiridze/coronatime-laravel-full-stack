<?php

namespace Tests\Feature;

use App\Models\CountryStatistics;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ByCountryStatisticsTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_visit_by_country_page_when_email_not_verified_shoud_redirect_to_login_page()
	{
		$user = User::factory()->create(['email_verified_at'=>null]);
		$response = $this->actingAs($user)->get('by-country');
		$response->assertRedirect('/login');
	}

	public function test_redirect_to_login_page_if_not_authorized_on_visiting_countries_statistics_page()
	{
		$response = $this->get('by-country');
		$response->assertRedirect('login');
	}

	public function test_visit_by_country_page_successfully()
	{
		$response = $this->actingAs($this->user)->get('by-country');
		$response->assertSuccessful();
	}

	public function test_when_user_search_should_return_results()
	{
		$response = $this->actingAs($this->user)->get(route('bycountry.show', '&search=k'));
		$response->assertSuccessful();
	}

	public function test_when_user_sorts_in_english_it_should_return_results()
	{
		$order = 'asc';
		$searchValue = 'k';
		$column = 'name';
		$response = $this->actingAs($this->user)
		->get(route('bycountry.show', '&column=' . $column . '&search=' . $searchValue . '&order=' . $order));

		$countries = CountryStatistics::where('name->en', 'LIKE', '' . $searchValue . '%')->orderBy($column, $order)->get();
		$response->assertViewHas([
			'countries'=> $countries,
		]);
	}

	public function test_when_user_sorts_in_georgian_it_should_return_results()
	{
		$order = 'asc';
		$searchValue = 'ა';
		$column = 'name';
		$this->actingAs($this->user)->get('language/ka');
		$response = $this->actingAs($this->user)
		->get(route('bycountry.show', '&column=' . $column . '&search=' . $searchValue . '&order=' . $order));

		$countries = CountryStatistics::where('name->ka', 'LIKE', '' . $searchValue . '%')->orderBy($column, $order)->get();

		$response->assertViewHas([
			'countries'=> $countries,
		]);
	}
}