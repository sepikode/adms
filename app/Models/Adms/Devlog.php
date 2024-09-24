<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Devlog extends Model
{
	protected $connection = 'adms';
	protected $table = 'devlog';
	public $timestamps = false;

	protected $casts = [
		'Cnt' => 'int',
		'ECnt' => 'int',
		'OpTime' => 'datetime'
	];

	protected $fillable = [
		'SN_id',
		'OP',
		'Object',
		'Cnt',
		'ECnt',
		'OpTime'
	];

	public function iclock()
	{
		return $this->belongsTo(Iclock::class, 'SN_id');
	}
}
