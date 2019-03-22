<?php

namespace App\Http\Controllers\System\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    //

    public function course_page(){


        return view('system/about/courses');

    }

    public function ECE_CS_8001(){
    	return view('system/about/courses/ECE_CS_8001');
    }

    public function ECE_CS_4001_7001(){
    	return view('system/about/courses/ECE_CS_4001_7001');
    }
}