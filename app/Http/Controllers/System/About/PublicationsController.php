<?php

namespace App\Http\Controllers\System\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationsController extends Controller
{
    //

    public function PublicationsPage() {

        return view('system/about/publications');
    }
}