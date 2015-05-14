<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'services.tpl',
		array(
			'headTitle' => 'Interior Design Services | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/services'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'services'
		)
	)
?>