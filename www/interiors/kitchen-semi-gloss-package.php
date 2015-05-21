<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'kitchen-semi-gloss-package.tpl',
		array(
			'headTitle' => 'Kitchen Semi-Gloss Interior Design Package | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/kitchen-semi-gloss-package'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'packages'
		)
	)
?>