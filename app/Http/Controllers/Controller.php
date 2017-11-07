<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // function login(Request $req){
    // 	$username = $req->input('username');
    // 	$password = $req->input('password');
    // 	$data= array('username' => $username,'password'=>$password );
    // 	DB::table('users')->($data);
    // }

    
}
