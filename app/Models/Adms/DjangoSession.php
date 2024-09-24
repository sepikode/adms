<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class DjangoSession extends Model
{
	protected $connection = 'adms';
	protected $table = 'django_session';
	protected $primaryKey = 'session_key';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'expire_date' => 'datetime'
	];

	protected $fillable = [
		'session_data',
		'expire_date'
	];
}
