<?php 

require_once("initialize.php");

function strip_zeroes($date_string=""){
	$no_zeroes = str_replace('*0', '', $date_string);
	$cleaned_date = str_replace('*', '', $no_zeroes);
	return $cleaned_date;
}

function redirect_to($location = NULL){
	if($location != NULL){
		header("Location: {$location}");
		exit;
	}
}

function output_message($message=""){
	if(!empty($message)){
		return "<p class=\"message\">{$message}</p>";
	}else{
		return "";
	}
}

function __autoload($class_name){
	$class_name = strtolower($class_name);
	$path = LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){
		require_once($path);
	}else{
		die("The file {$path} could not be found.");	
	}
}

function include_template($template=""){
	include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}

function require_file($file=""){
	require_once(SITE_ROOT.DS.'includes'.DS.$file);
}
?>