<?php


namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Iclock extends Model
{
	protected $connection = 'adms';
	protected $table = 'iclock';
	protected $primaryKey = 'SN';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'State' => 'int',
		'LastActivity' => 'datetime',
		'TransInterval' => 'int',
		'DeptID' => 'int',
		'FPCount' => 'int',
		'TransactionCount' => 'int',
		'UserCount' => 'int',
		'MaxFingerCount' => 'int',
		'MaxAttLogCount' => 'int',
		'AccFun' => 'int',
		'TZAdj' => 'int',
		'DelTag' => 'int'
	];

	protected $fillable = [
		'State',
		'LastActivity',
		'TransTimes',
		'TransInterval',
		'LogStamp',
		'OpLogStamp',
		'PhotoStamp',
		'Alias',
		'DeptID',
		'UpdateDB',
		'Style',
		'FWVersion',
		'FPCount',
		'TransactionCount',
		'UserCount',
		'MainTime',
		'MaxFingerCount',
		'MaxAttLogCount',
		'DeviceName',
		'AlgVer',
		'FlashSize',
		'FreeFlashSize',
		'Language',
		'VOLUME',
		'DtFmt',
		'IPAddress',
		'IsTFT',
		'Platform',
		'Brightness',
		'BackupDev',
		'OEMVendor',
		'City',
		'AccFun',
		'TZAdj',
		'DelTag',
		'FPVersion',
		'PushVersion'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'DeptID');
	}

	public function checkinouts()
	{
		return $this->hasMany(Checkinout::class, 'SN');
	}

	public function devcmds()
	{
		return $this->hasMany(Devcmd::class, 'SN_id');
	}

	public function devlogs()
	{
		return $this->hasMany(Devlog::class, 'SN_id');
	}

	public function iclock_iclockmsgs()
	{
		return $this->hasMany(IclockIclockmsg::class, 'SN_id');
	}

	public function iclock_oplogs()
	{
		return $this->hasMany(IclockOplog::class, 'SN');
	}

	public function templates()
	{
		return $this->hasMany(Template::class, 'SN');
	}

	public function userinfos()
	{
		return $this->hasMany(Userinfo::class, 'SN');
	}
}
