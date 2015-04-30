<?php

namespace Utils;

class Common {
	/*** Public Static Methods ***/
		public static function getValue($array, $key, $default = null) {
			return isset($array) && array_key_exists($key, $array) ? $array[$key] : $default;
		}
		
		public static function parseJsonFile($filePath) {
			return json_decode(utf8_encode(file_get_contents($filePath)), true);
		}
	
	/*** Variables ***/
	
}
