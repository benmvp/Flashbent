<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'portfolio.tpl',
		array(
			'headTitle' => 'Interior Design Portfolio | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/portfolio'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'portfolio'
		)
	)
?>