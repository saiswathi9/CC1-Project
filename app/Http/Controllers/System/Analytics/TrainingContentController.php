<?php

namespace App\Http\Controllers\System\Analytics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainingContentController extends Controller
{
    //

    public function TrainingContentPage() {

        return view('system/analytics/training_content');
    }
}
