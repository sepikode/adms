<?php

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class IclockMessage extends Model
{
	protected $connection = 'adms';
	protected $table = 'iclock_messages';
	public $timestamps = false;

	protected $casts = [
		'MsgType' => 'int',
		'StartTime' => 'datetime',
		'EndTime' => 'datetime',
		'DeptID_id' => 'int'
	];

	protected $fillable = [
		'MsgType',
		'StartTime',
		'EndTime',
		'MsgContent',
		'MsgImage',
		'DeptID_id',
		'MsgParam'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'DeptID_id');
	}
}
