<?php


namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class SecurityDetail extends Model
{
	protected $connection = 'adms';
	protected $table = 'security_details';
	protected $primaryKey = 'security_detail_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'dept_id' => 'int',
		'schedule' => 'int',
		'user_info' => 'int',
		'enroll_fingers' => 'int',
		'report_view' => 'int'
	];

	protected $fillable = [
		'user_id',
		'dept_id',
		'schedule',
		'user_info',
		'enroll_fingers',
		'report_view',
		'report'
	];

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'user_id');
	}
}
