<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class DjangoAdminLog extends Model
{
	protected $connection = 'adms';
	protected $table = 'django_admin_log';
	public $timestamps = false;

	protected $casts = [
		'action_time' => 'datetime',
		'user_id' => 'int',
		'content_type_id' => 'int',
		'action_flag' => 'int'
	];

	protected $fillable = [
		'action_time',
		'user_id',
		'content_type_id',
		'object_id',
		'object_repr',
		'action_flag',
		'change_message'
	];

	public function django_content_type()
	{
		return $this->belongsTo(DjangoContentType::class, 'content_type_id');
	}

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'user_id');
	}
}
