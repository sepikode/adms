<?php

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NumRun extends Model
{
	protected $connection = 'adms';
	protected $table = 'num_run';
	protected $primaryKey = 'num_run_id';
	public $timestamps = false;

	protected $casts = [
		'old_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'cycle' => 'int',
		'units' => 'int'
	];

	protected $fillable = [
		'old_id',
		'name',
		'start_date',
		'end_date',
		'cycle',
		'units'
	];
}
