<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Checkinout extends Model
{
	protected $connection = 'adms';
	protected $table = 'checkinout';
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'checktime' => 'datetime',
		'verifycode' => 'int'
	];

	protected $fillable = [
		'userid',
		'checktime',
		'checktype',
		'verifycode',
		'SN',
		'sensorid',
		'WorkCode',
		'Reserved'
	];

	public function iclock()
	{
		return $this->belongsTo(Iclock::class, 'SN');
	}

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'userid');
	}
}
