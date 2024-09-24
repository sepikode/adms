<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NumRunDetail extends Model
{
	protected $connection = 'adms';
	protected $table = 'num_run_detail';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'num_run_id' => 'int',
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		's_days' => 'int',
		'e_days' => 'int',
		'sch_class_id' => 'int'
	];

	protected $fillable = [
		'end_time',
		'e_days',
		'sch_class_id'
	];
}
