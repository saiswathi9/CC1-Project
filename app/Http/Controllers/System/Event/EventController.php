<?php

namespace App\Http\Controllers\System\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Classes\Event\RegisterEventClasses;

class EventController extends Controller
{
    //

    public function MUSymposiumsPage(){
        return view('/system/event/mu_symposiums');
    }

    public function BigDataSymposiumPage(){
        return view('/system/event/symposiums/bigdata_symposium');
    }


    public function SecondBigDataSymposiumPage(){
        return view('/system/event/symposiums/second_bigdata_symposium');
    }




    public function WorkshopsPage(){
        return view('system/event/workshops_page');
    }

    public function Workshop_2008_NeuroscienceResearchersPage(){
        return view('system/event/workshops/Workshop_2008_NeuroscienceResearchersPage');
    }





    public function BigDataSymposiumRegisterSubmit(Request $request){

        $name = $request->name;
        $email = $request->email;
        $department = $request->department;
        $position = $request->position;
        $research = $request->has('research') ? $request->research : '';
        $comment  = $request->has('comment') ? $request->comment : '';

        $register_event_class = new RegisterEventClasses;
        return $register_event_class->insertEventRegisterProfile($name, $email, $department, $position, $research, $comment);

    }
}
