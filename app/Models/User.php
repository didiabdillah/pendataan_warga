<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = [
        'user_id', 'user_name', 'user_email', 'user_password', 'user_phone', 'user_role', 'user_image'
    ];

    public function hosting_detail()
    {
        return $this->hasMany('App\Models\Hosting_detail', 'hosting_detail_provider_id');
    }

    public function domain_detail()
    {
        return $this->hasMany('App\Models\Domain_detail', 'domain_detail_provider_id');
    }
}
