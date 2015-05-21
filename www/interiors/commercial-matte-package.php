<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'commercial-matte-package.tpl',
		array(
			'headTitle' => 'Commercial Matte Interior Design Package | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('interiors/commercial-matte-package'),
			'navListItem' => 'interiors',
			'subnavListItem' => 'packages'
		)
	)
?>