<?php


namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class IclockDeptadmin extends Model
{
	protected $connection = 'adms';
	protected $table = 'iclock_deptadmin';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'dept_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'dept_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'dept_id');
	}

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'user_id');
	}
}
