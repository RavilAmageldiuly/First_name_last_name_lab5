<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function get_name($index) {
    	static $students = array(0 => 'Ravil', 1 => 'Erasyl', 2 => 'Maksat');
    	return view('name', ['name' => $students[$index]]);
    }

    public function get_birthday($birthday) {
    	return view('date')->with('date_of_birth',$birthday);
    }

    public function get_age($age) {
    	return view('age', compact('age'));
    }
}
