<?php

namespace App\Http\Controllers\System\Analytics;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;

class DeleteController extends Controller
{

	public function database_insert_monitor() {

		// $nsg_job = DB::table('monitor')->insert(['id'=>'10', 'user_id'=>'1234', 'job_id'=>'123456' 'passphrase'=>$passphrase, 'job_name'=>$job_name]);

		$json_str = '{ "name":"John" }';

			//$json = json_encode($json_str);

			$obj = json_decode($json_str);

			$nsg_job = DB::table('monitor')->insert(['user_id'=>'1234', 'job_id'=>'123456', 'passphrase'=>'asdfasdf', 'job_name'=>'sadfasd']);

			return $obj->name;

		}
	}