<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'index.tpl',
		array(
			'headTitle' => 'Flashbent Interiors | San Francisco Bay Area Interior Designer',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors'),
			'navListItem' => 'interiors'
		)
	)
?>