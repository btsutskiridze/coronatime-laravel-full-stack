<?php

namespace App\Http\Controllers;

use App\Models\CountryStatistics;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ByCountryController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

	public function show(Request $request): View
	{
		$search = !$request->search
		? ucfirst($request->input('search'))
		: '';

		$countries = CountryStatistics::query()->where('name', 'LIKE', '%' . $search . '%')->get();

		if ($request->column) //if request is about sorting
		{
			$countries = $request->column == 'name'
			? CountryStatistics::where('name', 'LIKE', '%' . $search . '%')
				->orderByRaw('JSON_EXTRACT(' . $request->column . ", '$.en') " . $request->order)
				->get()
			: CountryStatistics::where('name', 'LIKE', '%' . $search . '%')
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