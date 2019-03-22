<?php

namespace App\Http\Controllers\System\UploadAPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //

    public function uploadWorkflowInput(Request $request) {

        if ($request->hasFile('file')) {

            $filename = $request->file->store('', 'workflow_upload_disk');

            return $filename;
        }
    }

}
