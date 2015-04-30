<?php

namespace Utils;

require_once($_SERVER['DOCUMENT_ROOT'] . '/_libs/_smarty/Smarty.class.php');

date_default_timezone_set('America/Los_Angeles');

class Template {
	/*** Public Static Methods ***/
		public static function render($filePath, $properties) {
			$documentRoot = $_SERVER['DOCUMENT_ROOT'];
			$smarty = new \Smarty();

			//$smarty->debugging = true;
			
			$smarty->setTemplateDir($documentRoot . '/_libs/_smarty/templates');
			$smarty->setCompileDir($documentRoot . '/_libs/_smarty/templates_compiled');
			$smarty->setCacheDir($documentRoot . '/_libs/_smarty/cache');
			$smarty->setConfigDir($documentRoot . '/_libs/_smarty/configs');
			
			//$smarty->testInstall();
			
			// iterate over properties, assigning the values to the smarty object
			foreach ($properties as $name => $value)
				$smarty->assign($name, $value)
			;
			
			$smarty->display($filePath);
		}
	
	/*** Variables ***/
	
}
