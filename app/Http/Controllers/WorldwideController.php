<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class WorldwideController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}

	public function show(): View |RedirectResponse
	{
		if (auth()->check())
		{
			return view('worldwide', [
				'confirmed'=> DB::table('country_statistics')->sum('confirmed'),
				'recovered'=> DB::table('country_statistics')->sum('recovered'),
				'deaths'   => DB::table('country_statistics')->sum('deaths'),
			]);
		}
		return redirect()->route('login.show');
	}
}