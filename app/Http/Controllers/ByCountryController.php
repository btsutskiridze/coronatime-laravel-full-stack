<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ByCountryController extends Controller
{
	public function show(): View
	{
		return view('by-country');
	}
}