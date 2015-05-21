<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'residential-semi-gloss-package.tpl',
		array(
			'headTitle' => 'Residential Semi-Gloss Interior Design Package | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/residential-semi-gloss-package'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'packages'
		)
	)
?>