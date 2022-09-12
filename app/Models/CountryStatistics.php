<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Kyslik\ColumnSortable\Sortable;

class CountryStatistics extends Model
{
	use HasFactory,HasTranslations, Sortable;

	public $translatable = ['name'];

	public $sortable = ['id', 'name', 'confirmed', 'recovered', 'deaths'];

	protected $guarded = ['id'];
}