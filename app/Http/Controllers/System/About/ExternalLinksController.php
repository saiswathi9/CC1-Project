<?php

namespace App\Http\Controllers\System\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExternalLinksController extends Controller
{
    //

    public function ExternalLinksPage(){


        return view('system/about/external_links');

    }
}
