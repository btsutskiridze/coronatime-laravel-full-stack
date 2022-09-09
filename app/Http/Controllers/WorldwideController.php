<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WorldwideController extends Controller
{
	public function show(): View
	{
		return view('worldwide');
	}
}