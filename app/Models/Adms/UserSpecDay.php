<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UserSpecDay extends Model
{
	protected $connection = 'adms';
	protected $table = 'user_spec_day';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'start_spec_day' => 'datetime',
		'end_spec_day' => 'datetime',
		'date_id' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'end_spec_day',
		'yuanying',
		'date'
	];

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'user_id');
	}
}
