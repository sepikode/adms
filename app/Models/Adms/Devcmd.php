<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Devcmd extends Model
{
	protected $connection = 'adms';
	protected $table = 'devcmds';
	public $timestamps = false;

	protected $casts = [
		'CmdCommitTime' => 'datetime',
		'CmdTransTime' => 'datetime',
		'CmdOverTime' => 'datetime',
		'CmdReturn' => 'int',
		'User_id' => 'int'
	];

	protected $fillable = [
		'SN_id',
		'CmdContent',
		'CmdCommitTime',
		'CmdTransTime',
		'CmdOverTime',
		'CmdReturn',
		'User_id'
	];

	public function iclock()
	{
		return $this->belongsTo(Iclock::class, 'SN_id');
	}

	public function auth_user()
	{
		return $this->belongsTo(AuthUser::class, 'User_id');
	}
}
