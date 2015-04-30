<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'about.tpl',
		array(
			'headTitle' => 'About Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('about')
		)
	)
?>