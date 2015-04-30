<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'index.tpl',
		array(
			'headTitle' => 'Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('index')
		)
	)
?>