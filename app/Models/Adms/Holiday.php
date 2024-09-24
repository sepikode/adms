<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
	protected $connection = 'adms';
	protected $table = 'holidays';
	protected $primaryKey = 'holiday_id';
	public $timestamps = false;

	protected $casts = [
		'holiday_year' => 'int',
		'holiday_month' => 'int',
		'holiday_day' => 'int',
		'start_time' => 'datetime',
		'duration' => 'int',
		'holiday_type' => 'int'
	];

	protected $fillable = [
		'holiday_name',
		'holiday_year',
		'holiday_month',
		'holiday_day',
		'start_time',
		'duration',
		'holiday_type',
		'xin_bie',
		'min_zu'
	];
}
