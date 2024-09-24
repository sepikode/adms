<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Userinfo
 * 
 * @property int $userid
 * @property string $badgenumber
 * @property int|null $defaultdeptid
 * @property string|null $name
 * @property string|null $Password
 * @property string|null $Card
 * @property int|null $Privilege
 * @property int|null $AccGroup
 * @property string|null $TimeZones
 * @property string|null $Gender
 * @property Carbon|null $Birthday
 * @property string|null $street
 * @property string|null $zip
 * @property string|null $ophone
 * @property string|null $FPHONE
 * @property string|null $pager
 * @property string|null $minzu
 * @property string|null $title
 * @property string|null $SN
 * @property string|null $SSN
 * @property Carbon|null $UTime
 * @property string|null $State
 * @property string|null $City
 * @property int|null $SECURITYFLAGS
 * @property int $DelTag
 * @property int|null $RegisterOT
 * @property int|null $AutoSchPlan
 * @property int|null $MinAutoSchInterval
 * @property int|null $Image_id
 * 
 * @property Department|null $department
 * @property Iclock|null $iclock
 * @property Collection|CheckExact[] $check_exacts
 * @property Collection|Checkinout[] $checkinouts
 * @property Collection|ExcNote[] $exc_notes
 * @property Collection|SecurityDetail[] $security_details
 * @property Collection|Template[] $templates
 * @property Collection|UserOfRun[] $user_of_runs
 * @property Collection|UserSpecDay[] $user_spec_days
 * @property Collection|UserTempSch[] $user_temp_sches
 *
 * @package App\Models\Adms
 */
class Userinfo extends Model
{
	protected $connection = 'adms';
	protected $table = 'userinfo';
	protected $primaryKey = 'userid';
	public $timestamps = false;

	protected $casts = [
		'defaultdeptid' => 'int',
		'Privilege' => 'int',
		'AccGroup' => 'int',
		'Birthday' => 'datetime',
		'UTime' => 'datetime',
		'SECURITYFLAGS' => 'int',
		'DelTag' => 'int',
		'RegisterOT' => 'int',
		'AutoSchPlan' => 'int',
		'MinAutoSchInterval' => 'int',
		'Image_id' => 'int'
	];

	protected $fillable = [
		'badgenumber',
		'defaultdeptid',
		'name',
		'Password',
		'Card',
		'Privilege',
		'AccGroup',
		'TimeZones',
		'Gender',
		'Birthday',
		'street',
		'zip',
		'ophone',
		'FPHONE',
		'pager',
		'minzu',
		'title',
		'SN',
		'SSN',
		'UTime',
		'State',
		'City',
		'SECURITYFLAGS',
		'DelTag',
		'RegisterOT',
		'AutoSchPlan',
		'MinAutoSchInterval',
		'Image_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'defaultdeptid');
	}

	public function iclock()
	{
		return $this->belongsTo(Iclock::class, 'SN');
	}

	public function check_exacts()
	{
		return $this->hasMany(CheckExact::class, 'user_id');
	}

	public function checkinouts()
	{
		return $this->hasMany(Checkinout::class, 'userid');
	}

	public function exc_notes()
	{
		return $this->hasMany(ExcNote::class, 'user_id');
	}

	public function security_details()
	{
		return $this->hasMany(SecurityDetail::class, 'user_id');
	}

	public function templates()
	{
		return $this->hasMany(Template::class, 'userid');
	}

	public function user_of_runs()
	{
		return $this->hasMany(UserOfRun::class, 'user_id');
	}

	public function user_spec_days()
	{
		return $this->hasMany(UserSpecDay::class, 'user_id');
	}

	public function user_temp_sches()
	{
		return $this->hasMany(UserTempSch::class, 'user_id');
	}
}
