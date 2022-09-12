<?php

namespace App\Http\Controllers;

use App\Models\CountryStatistics;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ByCountryController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

	public function show(): View|RedirectResponse
	{
		$worldwide = [
			'name'     => 'Worldwide',
			'confirmed'=> DB::table('country_statistics')->sum('confirmed'),
			'recovered'=> DB::table('country_statistics')->sum('recovered'),
			'deaths'   => DB::table('country_statistics')->sum('deaths'),
		];

		if (auth()->check())
		{
			return view('by-country', [
				'worldwide' => $worldwide,
				'countries' => CountryStatistics::all(),
			]);
		}
		return redirect()->route('login.show');
	}
}