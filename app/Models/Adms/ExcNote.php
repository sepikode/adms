<?php

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ExcNote extends Model
{
	protected $connection = 'adms';
	protected $table = 'exc_notes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'att_date' => 'datetime'
	];

	protected $fillable = [
		'notes'
	];

	public function userinfo()
	{
		return $this->belongsTo(Userinfo::class, 'user_id');
	}
}
