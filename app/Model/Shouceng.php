<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shouceng extends Model
{
    protected $table="shoucang";
    protected $primaryKey="s_id";
    public $timestamps=false;
    protected $guarded=[];
}
