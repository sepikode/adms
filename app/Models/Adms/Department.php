<?php


namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
	protected $connection = 'adms';
	protected $table = 'departments';
	protected $primaryKey = 'DeptID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DeptID' => 'int',
		'supdeptid' => 'int'
	];

	protected $fillable = [
		'DeptName',
		'supdeptid'
	];

	public function iclocks()
	{
		return $this->hasMany(Iclock::class, 'DeptID');
	}

	public function iclock_deptadmins()
	{
		return $this->hasMany(IclockDeptadmin::class, 'dept_id');
	}

	public function iclock_messages()
	{
		return $this->hasMany(IclockMessage::class, 'DeptID_id');
	}

	public function userinfos()
	{
		return $this->hasMany(Userinfo::class, 'defaultdeptid');
	}
}
