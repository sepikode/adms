<?php

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CheckExact extends Model
{
	protected $connection = 'adms';
	protected $table = 'check_exact';
	protected $primaryKey = 'exact_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'check_time' => 'datetime',
		'is_add' => 'int',
		'is_modify' => 'int',
		'is_delete' => 'int',
		'in_count' => 'int',
		'is_count' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'check_time',
		'check_type',
		'is_add',
		'yuyin',
		'is_modify',
		'is_delete',
		'in_count',
		'is_count',
		'modify_by',
		'date'
	];

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'user_id');
	}
}
