<?php

namespace App\Classes\Event;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterEventClasses
{
    //



    public function insertEventRegisterProfile($name, $email, $department, $position, $research, $comment){

        $data = array(
            'name' => $name,
            'email' => $email,
            'department' => $department, 
            'position' => $position
        );


        $validate_res = Validator::make($data, [
            'name' 		    => 'required|max:50',
            'email' 		=> 'required|email|max:50|unique:user_event_profile',
            'department' 	=> 'required|max:50',
            'position' 	    => 'required',
        ]);





        if($validate_res->passes()){
            DB::table('user_event_profile')->insert(['name' => $name,
                'email' => $email,
                'department' => $department,
                'position' => $position,
                'research' => $research,
                'comment' => $comment,
            ]);
            return ['status'=>true, 'submit_msg'=>['Finished registration']];
        }
        else{
            return ['status'=>false, 'submit_msg'=>$validate_res->errors()->all()];
        }



    }
}
