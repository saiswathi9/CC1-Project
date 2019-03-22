<?php

namespace App\Http\Controllers\System\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticipantsController extends Controller
{
    //

    public function ParticipantsPage(){


        return view('system/about/participants');

    }
}