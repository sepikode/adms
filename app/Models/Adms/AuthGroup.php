<?php

namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AuthGroup extends Model
{
    protected $connection = 'adms';
    protected $table = 'auth_group';
    public $timestamps = false;

    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->hasMany(AuthGroupPermission::class, 'group_id');
    }

    public function userGroups()
    {
        return $this->hasMany(AuthUserGroup::class, 'group_id');
    }
}
