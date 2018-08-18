<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    //
    public function index()
    {
        $d1 = array("name"=>"Arun Kumar","class"=>"Xii","Roll"=>123);
        $d2 = array("name"=>"Ankit","class"=>"XI","Roll"=>23);
        $data =array($d1,$d2);
    
        
        

        //$data = ['jasdlkfj','owiujsdf','sdlkfjlksd'];
        return view('my')->with('data',$data);
        //return view('my',["name"=>"ajay","class"=>"BCA"]);
    }

    public function profile($id=null)
    {
        return view('profile',["id"=>$id]);
    }
    public function mypage()
    {
        return view('abc');
    }
    public function send(){
        return view('rs');
    }
}
