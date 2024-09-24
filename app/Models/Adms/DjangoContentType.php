<?php


namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class DjangoContentType extends Model
{
	protected $connection = 'adms';
	protected $table = 'django_content_type';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'app_label',
		'model'
	];

	public function auth_permissions()
	{
		return $this->hasMany(AuthPermission::class, 'content_type_id');
	}

	public function django_admin_logs()
	{
		return $this->hasMany(DjangoAdminLog::class, 'content_type_id');
	}
}
