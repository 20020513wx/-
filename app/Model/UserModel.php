<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
