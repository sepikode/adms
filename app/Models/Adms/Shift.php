<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
	protected $connection = 'adms';
	protected $table = 'shift';
	protected $primaryKey = 'shift_id';
	public $timestamps = false;

	protected $casts = [
		'ushift_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'run_num' => 'int',
		'cycle' => 'int',
		'units' => 'int'
	];

	protected $fillable = [
		'name',
		'ushift_id',
		'start_date',
		'end_date',
		'run_num',
		'cycle',
		'units'
	];
}
