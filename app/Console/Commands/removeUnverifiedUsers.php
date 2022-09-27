<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class removeUnverifiedUsers extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'remove:unverifiedUsers';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'removing users with unverified email';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle(): int
	{
		$users = User::all();

		foreach ($users as $user)
		{
			if (!$user->hasVerifiedEmail())
			{
				$user->delete();
			}
		}

		return 0;
	}
}