<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\registrationM;

class registration extends Controller
{


    public function create()
    {
            return view('registration');
    }

    public function insertData(Request $request)
    {
           
        echo $name = $request->input('name');
        echo $email = $request->input('email');
        echo $contact = $request->input('contact');
        echo $jobType = $request->input('jobType');
        echo $country = $request->input('country');
        echo $state = $request->input('state');
        echo $pwd = $request->input('pwd');
        $data=array("name"=>$name,"email"=>$email,"contact"=>$contact,"job_type"=>$jobType,"country"=>$country,"state"=>$state,"password"=>$pwd);
        DB::table('registration_data')->insert($data);
        return back()->with('status', 'successfully inserted');

//return redirect()->back()->with('success', ['Inserted Successfully']);   
        //return redirect('/')->with('success', 'Thanks for contacting us!');

        //return redirect()->back()->withSuccess('IT WORKS!');
//$data=$request->all();  //to check all the datas dumped from the form
            //var_dump($data);
           // die();

    }


}
