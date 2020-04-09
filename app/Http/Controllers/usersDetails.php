<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usersDetails extends Controller
{



    public function index() {
        $users = DB::select('select * from registration_Data');
      // var_dump($users[0]->name);
        return view('userDetails',['users'=>$users]);


        //$petanidetail = DB::table('tb1_user')->get()->toArray();
     }


}
