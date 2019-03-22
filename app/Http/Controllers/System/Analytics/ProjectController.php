<?php

namespace App\Http\Controllers\System\Analytics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    //

    public function project_page() {

        return view('system/analytics/projects');
    }
}