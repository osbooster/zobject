<?php
namespace Zobject;

class Arr {

	public static function arrayByKey($index, $array) {
    	foreach ($array as $key => $value) {
    		$array[$value[$index]] = $value;
    		unset($array[$key]);
    	}
    	return $array;
    }
}