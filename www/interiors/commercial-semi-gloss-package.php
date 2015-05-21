<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'commercial-semi-gloss-package.tpl',
		array(
			'headTitle' => 'Commercial Semi-Gloss Interior Design Package | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/commercial-semi-gloss-package'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'packages'
		)
	)
?>