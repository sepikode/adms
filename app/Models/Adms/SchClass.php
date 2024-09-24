<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SchClass extends Model
{
	protected $connection = 'adms';
	protected $table = 'sch_class';
	protected $primaryKey = 'sch_class_id';
	public $timestamps = false;

	protected $casts = [
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'late_minutes' => 'int',
		'early_minutes' => 'int',
		'check_in' => 'int',
		'check_out' => 'int',
		'check_in_time1' => 'datetime',
		'check_in_time2' => 'datetime',
		'check_out_time1' => 'datetime',
		'check_out_time2' => 'datetime',
		'color' => 'int',
		'auto_bind' => 'int'
	];

	protected $fillable = [
		'sch_name',
		'start_time',
		'end_time',
		'late_minutes',
		'early_minutes',
		'check_in',
		'check_out',
		'check_in_time1',
		'check_in_time2',
		'check_out_time1',
		'check_out_time2',
		'color',
		'auto_bind'
	];
}
