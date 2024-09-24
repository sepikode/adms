<?php

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
	protected $connection = 'adms';
	protected $table = 'template';
	protected $primaryKey = 'templateid';
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'FingerID' => 'int',
		'Valid' => 'int',
		'DelTag' => 'int',
		'UTime' => 'datetime',
		'USETYPE' => 'int'
	];

	protected $fillable = [
		'userid',
		'Template',
		'FingerID',
		'Valid',
		'DelTag',
		'SN',
		'UTime',
		'BITMAPPICTURE',
		'BITMAPPICTURE2',
		'BITMAPPICTURE3',
		'BITMAPPICTURE4',
		'USETYPE',
		'Template2',
		'Template3'
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
