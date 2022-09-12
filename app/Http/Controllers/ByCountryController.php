<?php

namespace App\Http\Controllers;

use App\Models\CountryStatistics;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

	public function search(Request $request)
	{
		$search = ucfirst($request->input('search'));

		if ($search == 0)
		{
			$countries = CountryStatistics::all();
		}
		else
		{
			$countries = CountryStatistics::query()->where('name', 'LIKE', '%' . $search . '%')->get();
		}

		return view('by-country', [
			'countries'=> $countries,
		]);
	}
}