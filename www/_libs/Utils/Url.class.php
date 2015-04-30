<?php

namespace Utils;

require_once($_SERVER['DOCUMENT_ROOT'] . '/_libs/Utils/Common.class.php');


class Url {
	/*** Public Static Methods ***/
		public static function assetUrl($path = '') {
			return self::siteUrl(
				'assets/' . $path
			);
		}
		
		public static function buildUrl($domain = '', $path = '', $queryParams = null, $hash = null, $scheme = null) {
			return self::resolveUrl(
				isset($scheme) ? ($scheme . ':') : ''
					. '//'
					. (!empty($domain) ? $domain : $httpHost)
					. (strpos($path, '/') === 0 ? $path :  '/' . $path),
				$queryParams
			) . (isset($hash) ? ('#' . $hash) : '');
		}
		
		public static function cssUrl($path = '') {
			return self::siteUrl(
				'css/' . $path
			);
		}
		
		public static function generateRelativePath($fromAbsolutePath, $toAbsolutePath) {
			$fromDirectories = explode('/', realPath($fromAbsolutePath));
			$toDirectories = explode('/', realpath($toAbsolutePath));
			$commonDirectories = array_intersect($fromDirectories, $toDirectories);
			$numParentDirectories = count($fromDirectories) - count($commonDirectories);
			
			return implode(
				'/', // join everything by / so that it's a string
				array_merge( // merge the parent directories with the path to the to directory)
					$numParentDirectories
						? array_fill(0, $numParentDirectories, '..') // compute the parent directories (..) if needed
						: array(),
					array_diff($toDirectories, $commonDirectories) // compute the difference between the common directory and the to directory (i.e. path from common directory)
				)
			);
		}
		
		public static function externalUrl($url = '', $params = null) {
			return self::resolveUrl(
				'/redirect',
				array('l'=> self::resolveUrl($url, $params))
			);
		}
		
		public static function jsUrl($path = '') {
			return self::siteUrl(
				'js/' . $path
			);
		}
		
		public static function resolveUrl($url = '', $queryParams = null) {
			// TODO: use func_get_args in order to support multiple sets of query param overrides
			$urlParts = parse_url($url);
			
			if (!isset($queryParams))
				$queryParams = array();
			
			if (isset($urlParts['query'])) {
				$originalQueryParams;
				parse_str($urlParts['query'], $originalQueryParams);
				$queryParams = array_merge($originalQueryParams, $queryParams);
			}
			
			$queryString = http_build_query($queryParams);
			$scheme = Common::getValue($urlParts, 'scheme');
	
			return(
				(isset($scheme) ? ($scheme . ':') : '')
					. '//'
					. Common::getValue($urlParts, 'host', self::$s_httpHost)
					. (strpos($urlParts['path'], '/') === 0 ? '' : '/') . $urlParts['path']
					. (!empty($queryString) ? '?' . $queryString : '')
					. Common::getValue($urlParts, 'fragment', '')
			);
		}
		
		public static function siteUrl($path = '', $queryParams = null, $hash = null) {
			return self::buildUrl(
				self::$s_httpHost,
				$path,
				$queryParams,
				$hash
			);
		}
	
	
	/*** Variables ***/
		public static $s_httpHost;
	
}

$httpHost = Url::$s_httpHost = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'www.flashbent.com';
