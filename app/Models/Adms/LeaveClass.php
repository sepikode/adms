<?php


namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class LeaveClass extends Model
{
	protected $connection = 'adms';
	protected $table = 'leave_class';
	protected $primaryKey = 'leave_id';
	public $timestamps = false;

	protected $casts = [
		'min_unit' => 'float',
		'unit' => 'int',
		'remaind_proc' => 'int',
		'remaind_count' => 'int',
		'deduct' => 'float',
		'color' => 'int',
		'classify' => 'int'
	];

	protected $fillable = [
		'leave_name',
		'min_unit',
		'unit',
		'remaind_proc',
		'remaind_count',
		'report_symbol',
		'deduct',
		'color',
		'classify'
	];
}
