<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class IclockIclockmsg extends Model
{
	protected $connection = 'adms';
	protected $table = 'iclock_iclockmsg';
	public $timestamps = false;

	protected $casts = [
		'MsgType' => 'int',
		'StartTime' => 'datetime',
		'EndTime' => 'datetime',
		'LastTime' => 'datetime'
	];

	protected $fillable = [
		'SN_id',
		'MsgType',
		'StartTime',
		'EndTime',
		'MsgParam',
		'MsgContent',
		'LastTime'
	];

	public function iclock()
	{
		return $this->belongsTo(Iclock::class, 'SN_id');
	}
}
