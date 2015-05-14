<?php

	$documentRoot = $_SERVER['DOCUMENT_ROOT'];
	
	require_once($documentRoot . '/_libs/Utils/Template.class.php');
	require_once($documentRoot . '/_libs/Utils/Url.class.php');
	
	\Utils\Template::render(
		'events.tpl',
		array(
			'headTitle' => 'Events | Flashbent',
			'canonicalUrl' => \Utils\Url::siteUrl('events'),
			'navListItem' => 'events'
		)
	)
?>