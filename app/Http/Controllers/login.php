<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class login extends Controller
{
    public function getData(Request $data)
    {
             $username=$data->input('email');
             $password=$data->input('password');

             
            $users = DB::select("SELECT * FROM registration_Data WHERE email='$username' AND password='$password'");
            echo $email = $users[0]->name;
            
                if($username == $email )
                {
                    echo "true";
                }
                else
                {
                    echo "false";
                }



            // echo $count = count($users);
            //  $email=$users[0]->email;
             
                 //return view('userDetails',['users'=>$users]);
         
/*
               if($username == $email)
               {
                   echo "true";
                   // $data->session()->put('user',$data->input('email'));
                   // $session_data['userdata']=$data->session()->get('user');
                    //return \Redirect::route('user.details');
               }
               else
               {
                    echo "false";
                    //return view('login');
               }

               */

           /* $data->session()->put('user',$data->input('email'));
                 $session_data['userdata']=$data->session()->get('user');
            
                if($session_data['userdata']=='dharmraj.yadav5@gmail.com')
                    {
                        return \Redirect::route('user.details');

                    }            
                else
                {
                    return view('login');
                }
                
                */

                //echo $email=$data->input('email');
            //$password=$data->input('password');
            //$user = DB::table('registration_data')->where('email', $email)->where('password', $password)->first();;
            //if ( !$user ) echo "Invalid credentials.";
            //else echo "email: $email";

    }
}
