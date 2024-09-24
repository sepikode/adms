<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class IclockOplog extends Model
{
	protected $connection = 'adms';
	protected $table = 'iclock_oplog';
	public $timestamps = false;

	protected $casts = [
		'admin' => 'int',
		'OP' => 'int',
		'OPTime' => 'datetime',
		'Object' => 'int',
		'Param1' => 'int',
		'Param2' => 'int',
		'Param3' => 'int'
	];

	protected $fillable = [
		'SN',
		'admin',
		'OP',
		'OPTime',
		'Object',
		'Param1',
		'Param2',
		'Param3'
	];

	public function iclock()
	{
		return $this->belongsTo(Iclock::class, 'SN');
	}
}
