<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Device;
use App\Banner;

class SetupController extends Controller
{
	

	public $successStatus = 200;
    public $failureStatus = 401;

    public function setup(Request $request ) {
    	$device_id = request('device_id');
    	$device = Device::find($device_id);
    	if(empty($device)){
    		$data = $request->all();
    		$entity = DEvice::create($data);
    		/*
    		$entity = new Device;
    		$entity->lang = = request('language');
    		$entity->device_id = request('device_id');
    		$entity->os = request('os');
    		$entity->version_num = request('version_num');
    		$entity->db_version = request('db_version');
    		$entity->fcm_id = request('fcm_id');
    		$entity->save();*/
    		$code = $this->successStatus;
    		$msg = '';
    		$setup['is_need_app_update'] = 0;
    		$setup['app_update_mandatory'] = 0;
    		$setup['store_link'] = 0;
    		$setup['is_need_db_update'] = 0;
    		$setup['is_blocked'] = 0;
    		$setup['padges_count']['notification_count'] = 0;
    		$setup['padges_count']['chat_count'] = 0;
    		$setup['padges_count']['order_box_count'] = 0;
    		$message = Banner::where([['status', 'Active'],['ad_space',1]])->first();
    		$setup['banner'] = $message;

    		$dataObject = $setup;

    	}else{

    	}
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];
        
        return response()->json($object, $this->successStatus); 
    }
}
