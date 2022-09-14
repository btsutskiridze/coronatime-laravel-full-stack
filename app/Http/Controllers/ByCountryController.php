<?php

namespace App\Http\Controllers;

use App\Models\CountryStatistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class ByCountryController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

	public function show(Request $request): View
	{
		$search = $request->search
		? ucfirst($request->input('search'))
		: '';

		$countries = CountryStatistics::where('name->en', 'LIKE', '' . $search . '%')->orWhere('name->ka', 'LIKE', '' . $search . '%')->get();

		if ($request->column) //if request is about sorting
		{
			$countries = App::currentLocale() === 'en'
			? CountryStatistics::where('name->en', 'LIKE', '%' . $search . '%')
				->orderBy($request->column, $request->order)
				->get()
			: CountryStatistics::where('name->ka', 'LIKE', '%' . $search . '%')
				->orderBy($request->column, $request->order)
				->get();
		}

		$newOrder = $request->order == 'asc' ? 'desc' : 'asc';

		return view('by-country', [
			'countries' => $countries,
			'newOrder'  => $newOrder,
		]);
	}
}