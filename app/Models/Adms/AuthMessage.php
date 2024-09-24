<?php

namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class AuthMessage extends Model
{
    protected $connection = 'adms';
    protected $table = 'auth_message';
    public $timestamps = false;

    protected $casts = [
        'user_id' => 'int',
    ];

    protected $fillable = [
        'user_id',
        'message',
    ];

    public function authUser()
    {
        return $this->belongsTo(AuthUser::class);
    }
}
