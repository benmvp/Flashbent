<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'residential-matte-package.tpl',
		array(
			'headTitle' => 'Residential Matte Interior Design Package | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/residential-matte-package'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'packages'
		)
	)
?>