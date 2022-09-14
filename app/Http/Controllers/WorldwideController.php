<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class WorldwideController extends Controller
{
	public function show(): View |RedirectResponse
	{
		if (auth()->user()->email_verified_at)
		{
			return view('worldwide', [
				'confirmed'=> DB::table('country_statistics')->sum('confirmed'),
				'recovered'=> DB::table('country_statistics')->sum('recovered'),
				'deaths'   => DB::table('country_statistics')->sum('deaths'),
			]);
		}
		else
		{
			auth()->logout();
			return redirect()->route('login.show');
		}
	}
}