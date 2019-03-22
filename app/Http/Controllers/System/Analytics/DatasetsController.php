<?php

namespace App\Http\Controllers\System\Analytics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatasetsController extends Controller
{
    //

    public function DatasetsPage() {

        return view('system/analytics/datasets');
    }
}
