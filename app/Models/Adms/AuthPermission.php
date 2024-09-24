<?php

namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AuthPermission extends Model
{
    protected $connection = 'adms';
    protected $table = 'auth_permission';
    public $timestamps = false;

    protected $casts = [
        'content_type_id' => 'int',
    ];

    protected $fillable = [
        'name',
        'content_type_id',
        'codename',
    ];

    public function djangoContentType()
    {
        return $this->belongsTo(DjangoContentType::class, 'content_type_id');
    }

    public function authGroupPermissions()
    {
        return $this->hasMany(AuthGroupPermission::class, 'permission_id');
    }

    public function authUserUserPermissions()
    {
        return $this->hasMany(AuthUserUserPermission::class, 'permission_id');
    }
}
