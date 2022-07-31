<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Validator;

use App\User;
use App\UserProfile;
use App\UserAddress;
use App\Upgrade;
use App\Device;

use App\City;
use DB;


class UserController extends Controller
{
    public $successStatus = 200;
    public $failureStatus = 401;

/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        $email = request('mobile');
        $email = $email."@dawer.com";
        if(Auth::attempt(['email' => $email, 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 

            $user = Auth::user();
            $user->token = $success['token'];

            $user->rate_user = $user->RateUser;
            $user->addresses = $user->Addresses;
            $user->page_notify = 0; // when there is page updated 
            $user->profile = $user->Profile;
            if($user->profile){
            $user->profile->upgrade  = $user->profile->Upgrade;
            $user->profile->city = $user->profile->City;
        }
            $code = $this->successStatus;
        	$msg = '';
        	$dataObject['user'] = $user;
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            // update device data
            $device_id = request('device_id');
            $device = DB::table('devices')->where('device_id', $device_id)->first();
            if($device){
                $update_device = Device::find($device->id);
                $update_device->lang = request('lang');
                $update_device->device_type = request('device_type');
                $update_device->fcm_id = request('fcm_id');
                $update_device->os_version = request('os_version');
                $update_device->device_id = request('device_id');
                $update_device->visitor = 0;
                
                $update_device->save();
            }
            return response()->json($object, $this->successStatus); 
        } 
        else{

            $code = $this->failureStatus;
        	$msg = 'invalid login';
        	$dataObject['user'] = (object)[];
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            return response()->json($object, $this->failureStatus); 
        } 
    }



	/** 
     * Social login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
	public function sociallogin(){ 
	       
	}


/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'mobile' => 'required', 
            'email' => 'email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);

		if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

		$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;

        // create zero rate for user
        $data =  Array();
        $data['rate_count'] = 0;
        $data['rate_count_1'] = 0;
        $data['rate_count_2'] = 0;
        $data['rate_count_3'] = 0;
        $data['rate_count_4'] = 0;
        $data['rate_count_5'] = 0;
        $data['user_id'] = 0;
        $rate = RateUser::create($data);
		return response()->json(['success'=>$success], $this-> successStatus); 
    }

/** 
     * Socila Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function socialregister(Request $request) 
    { 
    }

    /** 
     * Profile api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function profile() { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

    public function follow() {
    }

    public function unfollow() {
    }

    public function trust () {
    }

    public function report () {
    }

    public function rating () {
    }

  	public function update_profile(){
        
    }

    public function forgetpassword () {
    }

    public function verify () {
    }

    public function domain_check () {
    }

    public function logout () {
        // remove fcm id when user logout
    }
}
