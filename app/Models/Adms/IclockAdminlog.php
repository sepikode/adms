<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class IclockAdminlog extends Model
{
	protected $connection = 'adms';
	protected $table = 'iclock_adminlog';
	public $timestamps = false;

	protected $casts = [
		'time' => 'datetime',
		'User_id' => 'int',
		'count' => 'int'
	];

	protected $fillable = [
		'time',
		'User_id',
		'model',
		'action',
		'object',
		'count'
	];

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'User_id');
	}
}
