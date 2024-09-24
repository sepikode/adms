<?php

namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class AuthGroupPermission extends Model
{
    protected $connection = 'adms';
    protected $table = 'auth_group_permissions';
    public $timestamps = false;

    protected $casts = [
        'group_id' => 'integer',
        'permission_id' => 'integer',
    ];

    protected $fillable = [
        'group_id',
        'permission_id',
    ];

    public function authGroup()
    {
        return $this->belongsTo(AuthGroup::class);
    }

    public function authPermission()
    {
        return $this->belongsTo(AuthPermission::class);
    }
}
