<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('country_statistics', function (Blueprint $table) {
			$table->id();
			$table->string('code')->unique();
			$table->json('name');
			$table->mediumInteger('confirmed')->nullable();
			$table->mediumInteger('recovered')->nullable();
			$table->mediumInteger('deaths')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('country_statistics');
	}
};