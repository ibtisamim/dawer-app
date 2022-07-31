<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ReportingReason;
use DB;
use App\Currency;
use App\City;
use App\Country;
use App\Area;


class GeneralController extends Controller
{

    public $successStatus = 200;
    public $failureStatus = 401;

    public function getreportreasons($lang , $source) {
    
    	//$source = request('source');

        if($lang!='ar')
            $list = ReportingReason::where([['source','=', $source],['status',
                '=','Active']])->get()->translate($lang);
        else
            $list = ReportingReason::where([['source','=', $source],['status',
                '=','Active']])->get();
    	
    	if($list){
    		$code = $this->successStatus;
        	$msg = '';
        	$dataObject['reasons'] = $list;
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

	        return response()->json($object, $this->successStatus); 
    	}else{

            $code = $this->failureStatus;
        	$msg = 'No Found Reasons';
        	$dataObject['reasons'] = (object)[];
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            return response()->json($object, $this->failureStatus); 
    	}
    }

    public function currencylist($lang) {
        if($lang!='ar')
    		$list = Currency::all()->translate($lang);
        else
            $list = Currency::all();

           // $currencies = array();
    	if($list){
    		$code = $this->successStatus;
        	$msg = '';
        /*    foreach ($list as  $value) {
                /*$value->name_ku = $value->getTranslatedAttribute('name', 'ku', 'false');
                $value->code_ku = $value->getTranslatedAttribute('code', 'ku', 'false');
                $value->name_en = $value->getTranslatedAttribute('name', 'en', 'false');
                $value->code_en = $value->getTranslatedAttribute('code', 'en', 'false');
                
                $currencies[] = Array (
                    'name_ar' => $value->name,
                    'code_ar' => $value->code,
                    'name_ku' => (string)$value->getTranslatedAttribute('name', 'ku', 'false'),
                    'code_ku' => (string)$value->getTranslatedAttribute('code', 'ku', 'false'),
                    'name_en' => (string)$value->getTranslatedAttribute('name', 'en', 'false'),
                    'code_en' => (string)$value->getTranslatedAttribute('code', 'en', 'false')
                );
   
            }*/
        	$dataObject['currencies'] = $list;
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

	        return response()->json($object, $this->successStatus); 
    	}else{

            $code = $this->failureStatus;
        	$msg = 'No Found Reasons';
        	$dataObject['currencies'] = (object)[];
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            return response()->json($object, $this->failureStatus); 
    	}
    }

    public function countrylist($lang) {

        if($lang!='ar')
            $list = Country::all()->translate($lang);
        else
            $list = Country::all();

	
    	if($list){
    		
    		$code = $this->successStatus;
        	$msg = '';
        	$dataObject['country'] = $list;
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

	        return response()->json($object, $this->successStatus); 
    	}else{

            $code = $this->failureStatus;
        	$msg = 'No Found Reasons';
        	$dataObject['country'] = (object)[];
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            return response()->json($object, $this->failureStatus); 
    	}
    }

    public function citylist($lang) {

        if($lang!='ar')
            $list = City::all()->translate($lang);
        else
            $list = City::all();

    	if($list){
    		
    		$code = $this->successStatus;
        	$msg = '';
        	$dataObject['city'] = $list;
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

	        return response()->json($object, $this->successStatus); 
    	}else{

            $code = $this->failureStatus;
        	$msg = 'No Found Reasons';
        	$dataObject['city'] = (object)[];
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            return response()->json($object, $this->failureStatus); 
    	}
    }

    public function arealist($lang , $city_id) {
		if($lang!='ar')
            $list = Area::WHERE('city_id',$city_id)->get()->translate($lang);
        else
            $list = Area::WHERE('city_id',$city_id)->get();

    	if($list){
    		
    		$code = $this->successStatus;
        	$msg = '';
        	$dataObject['area'] = $list;
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

	        return response()->json($object, $this->successStatus); 
    	}else{

            $code = $this->failureStatus;
        	$msg = 'No Found Reasons';
        	$dataObject['area'] = (object)[];
	        $object =[
	          'code'=>$code,
	          'msg'=>$msg,
	          'dataObject'=>$dataObject
	        ];

            return response()->json($object, $this->failureStatus); 
    	}
    }

    
}
