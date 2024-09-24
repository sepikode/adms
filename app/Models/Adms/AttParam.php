<?php

namespace App\Models\Adms;

use Illuminate\Database\Eloquent\Model;

class AttParam extends Model
{
    protected $connection = 'adms';
    protected $table = 'att_param';
    protected $primaryKey = 'param_name';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'param_type',
        'param_value'
    ];

    public function getParamName(): string
    {
        return $this->primaryKey;
    }

    public function getParamType(): ?string
    {
        return $this->param_type;
    }

    public function getParamValue(): string
    {
        return $this->param_value;
    }
}
