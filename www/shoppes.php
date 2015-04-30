<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'shoppes.tpl',
		array(
			'headTitle' => 'Shoppes | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('shoppes')
		)
	)
?>