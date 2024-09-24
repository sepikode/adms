<?php

namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class AuthUserUserPermission extends Model
{
	protected $connection = 'adms';
	protected $table = 'auth_user_user_permissions';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'permission_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'permission_id'
	];

	public function auth_permission()
	{
		return $this->belongsTo(AuthPermission::class, 'permission_id');
	}

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'user_id');
	}
}
