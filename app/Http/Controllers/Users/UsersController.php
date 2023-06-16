<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showUser(){
        return "Welcom Back Germanboy!";
    }
    public function getIndex(){    
        $data=[];
        $data['id']=13;
        $data['name']='Germanboy'; 
        $obj=new \stdClass();
        $obj->name='Germanboy';
        $obj->gender='Male';
        $names=[];
        return view('welcome',compact('names'));
    }
}
