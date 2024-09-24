<?php


namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class AuthUserGroup extends Model
{
	protected $connection = 'adms';
	protected $table = 'auth_user_groups';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'group_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'group_id'
	];

	public function auth_group()
	{
		return $this->belongsTo(AuthGroup::class, 'group_id');
	}

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'user_id');
	}
}
