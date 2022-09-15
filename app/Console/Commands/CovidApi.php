<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\CountryStatistics;

class CovidApi extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'request:countries';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Covid Api';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle(): int
	{
		CountryStatistics::truncate();

		$response = Http::withHeaders([
			'accept' => 'application/json',
		])->get('https://devtest.ge/countries');
		$data = $response->json();

		//creating saving json names and country code
		foreach ($data as $country)
		{
			$countryObj = new CountryStatistics();
			$countryObj->code = $country['code'];
			$countryObj->name = $country['name'];

			$statisticResponse = Http::withHeaders([
				'accept'      => 'application/json',
				'Content-Type'=> 'application/json',
			])->post('https://devtest.ge/get-country-statistics', [
				'code'=> $countryObj->code,
			]);
			$statisticData = $statisticResponse->json();

			$countryObj->confirmed = $statisticData['confirmed'];
			$countryObj->recovered = $statisticData['recovered'];
			$countryObj->deaths = $statisticData['deaths'];
			$countryObj->save();
		}

		return 0;
	}
}