<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ByCountryController extends Controller
{
	public function show(): View|RedirectResponse
	{
		if (auth()->check())
		{
			return view('by-country');
		}
		return redirect()->route('login.show');
	}
}