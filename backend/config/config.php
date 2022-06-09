<?php
if(!function_exists('root')){
	function root($path=''){
		$path=trim($path,'/');
		$docPath=dirname(dirname(__FILE__)).'/'.$path;
		// echo $docPath;
		return $docPath;
		
	}
}

if(!function_exists('base_url')){

function base_url($path=''){
		$path=trim($path,'/');
		$http=$_SERVER['HTTP_HOST'];
		$serverName=$_SERVER['SERVER_NAME'];
		// echo $http;
		return $http.'/lms_new/'.$path;
		
	
	}

}