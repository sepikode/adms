<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UserTempSch extends Model
{
	protected $connection = 'adms';
	protected $table = 'user_temp_sch';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'come_time' => 'datetime',
		'leave_time' => 'datetime',
		'overtime' => 'int',
		'type' => 'int',
		'flag' => 'int',
		'sch_class_id' => 'int'
	];

	protected $fillable = [
		'overtime',
		'type',
		'flag',
		'sch_class_id'
	];

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'user_id');
	}
}
