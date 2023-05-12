<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected $table="group";
    protected $primarykey="group_id";
    public function member(){
        return $this->hasMany('App\Models\member','group_id','group_id');
    }
}
