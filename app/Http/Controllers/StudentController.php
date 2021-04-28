<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function addcour()
    {

    	return view('add_course');
    }

    public function savecour( Request $request)
    {


    	DB::table('students')->insert([
    			'name'=>$request ->name,
    			'description'=>$request ->description,
    			'gender'=>$request ->gender,
                'created_at' => date('Y-m-d h:m:s'),



    			'check'=>$request ->check
    	]);

    	return back()->with('course.student','Submitted Successfully');
    }

    public function studentlist()
    {
    	$list = DB::table('students')->get();
    	return view('studentlist',compact('list'));
    }

     public function editdetails($id){
     	$lists = DB::table('students')->where('id',$id)->first();
     	return view('editdetails',compact('lists'));

     }
      public function updatedetails(Request $request){
      	
     	DB::table('students')->where('id',$request->id)->update([
     		    'name'=>$request ->name,
    			'description'=>$request ->description,
    			'gender'=>$request ->gender,
                'updated_at' => date('Y-m-d h:m:s'),

    			'check'=>$request ->check

     	]);
     	return back()->with('updated','Updated Successfully');
     }

    public function deletedetails($id){
    	$lists = DB::table('students')->where('id',$id)->delete();
     	return back()->with('deleted','Deleted Successfully');

    }	

    public function modalpop(){

        return view('modalpop');
    }
}
