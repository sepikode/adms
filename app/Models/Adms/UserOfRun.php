<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UserOfRun extends Model
{
	protected $connection = 'adms';
	protected $table = 'user_of_run';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'num_of_run_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'is_not_of_run' => 'int',
		'order_run' => 'int'
	];

	protected $fillable = [
		'is_not_of_run',
		'order_run'
	];

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'user_id');
	}
}
