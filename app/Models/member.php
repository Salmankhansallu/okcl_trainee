<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $table="member";
    protected $primarykey="id";
    public function getgroup(){
        return $this->hasMany('App\Models\group','group_id','group_id');
    }

}
