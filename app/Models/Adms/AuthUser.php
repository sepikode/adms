<?php

namespace App\Models\Adms;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    protected $connection = 'adms';
    protected $table = 'auth_user';
    public $timestamps = false;

    protected $casts = [
        'is_staff' => 'bool',
        'is_active' => 'bool',
        'is_superuser' => 'bool',
        'last_login' => 'datetime',
        'date_joined' => 'datetime'
    ];

    protected $hidden = ['password'];

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
        'is_staff',
        'is_active',
        'is_superuser',
        'last_login',
        'date_joined'
    ];

    public function authMessages()
    {
        return $this->hasMany(AuthMessage::class, 'user_id');
    }

    public function authUserGroups()
    {
        return $this->hasMany(AuthUserGroup::class, 'user_id');
    }

    public function authUserUserPermissions()
    {
        return $this->hasMany(AuthUserUserPermission::class, 'user_id');
    }

    public function devcmds()
    {
        return $this->hasMany(Devcmd::class, 'user_id');
    }

    public function djangoAdminLogs()
    {
        return $this->hasMany(DjangoAdminLog::class, 'user_id');
    }

    public function iclockAdminLogs()
    {
        return $this->hasMany(IclockAdminlog::class, 'user_id');
    }

    public function iclockDeptAdmins()
    {
        return $this->hasMany(IclockDeptadmin::class, 'user_id');
    }
}
