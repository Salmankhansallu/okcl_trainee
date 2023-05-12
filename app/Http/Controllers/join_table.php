<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\group;
class join_table extends Controller
{
    public function index(){
        
        return member::with('getgroup')->get();
    }
    public function group(){
        return group::with('member')->get();    //[0]->member[0]->phone
    }
    // public function group(Group $id){
    //     return $id;
    // }
    
}
