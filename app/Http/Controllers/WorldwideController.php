<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WorldwideController extends Controller
{
	public function show(): View |RedirectResponse
	{
		if (auth()->check())
		{
			return view('worldwide');
		}
		return redirect()->route('login.show');
	}
}