<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class okcl_model extends Model
{
    use HasFactory;
    use SoftDeletes;
   protected $table="okcl_user";
   protected $primarykey="id";
   public function setNameAttribute($value){
    $this->attributes["name"]=ucwords($value);
   }
   public function getDobAttribute($value){
    return date("d-M-Y",strtotime($value));
   }
}
