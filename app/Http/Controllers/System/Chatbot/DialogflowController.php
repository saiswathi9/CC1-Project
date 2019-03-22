<?php

namespace App\Http\Controllers\System\Chatbot;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DialogflowController extends Controller
{

	$process = new Process('python C:/Users/sivar/nlp-project/Untitled.ipynb');
	$process->run();

	// executes after the command finishes
	if (!$process->isSuccessful()) {
	    throw new ProcessFailedException($process);
	}
	echo $process->getOutput();
	public function detect_intent () {

		// $nsg_job = DB::table('monitor')->insert(['id'=>'10', 'user_id'=>'1234', 'job_id'=>'123456' 'passphrase'=>$passphrase, 'job_name'=>$job_name]);

		$json_str = '{"queryInput":{"text":{"text":"hi","languageCode":"en"}},"queryParams":{"timeZone":"America/Chicago"}}';

			//$json = json_encode($json_str);

			// $obj = json_decode($json_str);

			// $nsg_job = DB::table('monitor')->insert(['user_id'=>'1234', 'job_id'=>'123456', 'passphrase'=>'asdfasdf', 'job_name'=>'sadfasd']);

			// return $obj->name;

		$json_input = json_encode($json_str);

		$cmd = 'curl -H "Content-Type: application/json; charset=utf-8"  -H "Authorization: Bearer b179576c20cf4fb18671354ba2d930e1" -d '.$json_input.' "https://dialogflow.googleapis.com/v2/projects/demoagent-219dc/agent/sessions/788ea37c-61c1-c39d-51c7-c4055c347d9d:detectIntent"';

        exec($cmd, $json);
            // $xml_str = implode(" ", $xml_output_arr);
            // $xml = simplexml_load_string($xml_str);
            // $json = json_encode($xml);

		return $json;

		}
	}