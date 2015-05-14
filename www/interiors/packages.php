<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'packages.tpl',
		array(
			'headTitle' => 'Interior Design Packages | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/packages'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'packages'
		)
	)
?>