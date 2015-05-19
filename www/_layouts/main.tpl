<!DOCTYPE html>
<html>
	<head>
	
		<title>{$headTitle|default:"Flashbent"}</title>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{if isset($headDescription)}<meta name="description" content="{$headDescription|escape}" />{/if}
		{if isset($headKeywords)}<meta name="keywords" content="{$headKeywords|escape}" />{/if}
		
		{if isset($canonicalUrl)}<link rel="canonical" href="{$canonicalUrl}" />{/if}
		<link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />

		<link rel="stylesheet" type="text/css" href="/css/layout.css" />
		{block name="headContent"}{/block}
		
	</head>
	<body>
		<div id="page">
			<header id="header" class="header">
				<a href="/" class="header-logoLink">
					<img class="header-logo" src="/assets/flashbent-logo-header.png" alt="Flashbent logo" />
				</a><nav class="header-nav">
					<ul class="header-navList">
						<li class="header-navListItem{if $navListItem == 'interiors'} header-navListItemActive{/if}"><a href="/interiors">INTERIORS</a>
							<ul class="header-subnavList">
								<li class="header-subnavListItem{if !isset($subnavListItem) || $subnavListItem == ''} header-subnavListItemActive{/if}"><a href="/interiors">Overview</a></li>
								<li class="header-subnavListItem{if $subnavListItem == 'portfolio'} header-subnavListItemActive{/if}"><a href="/interiors/portfolio">Portfolio</a></li>
								<li class="header-subnavListItem{if $subnavListItem == 'packages'} header-subnavListItemActive{/if}"><a href="/interiors/packages">Packages</a></li>
							</ul>
						</li>
						<li class="header-navListItem{if $navListItem == 'events'} header-navListItemActive{/if}"><a href="/events">EVENTS</a></li>
						<li class="header-navListItem{if $navListItem == 'shoppes'} header-navListItemActive{/if}"><a href="/shoppes">SHOPPES</a></li>
						<li class="header-navListItem{if $navListItem == 'blog'} header-navListItemActive{/if}"><a href="http://blog.flashbent.com/">BLOG</a></li>
						<li class="header-navListItem{if $navListItem == 'about'} header-navListItemActive{/if}"><a href="/about">ABOUT</a>
							<ul class="header-subnavList">
								<li class="header-subnavListItem{if !isset($subnavListItem) || $subnavListItem == ''} header-subnavListItemActive{/if}"><a href="/about">Mission</a></li>
								<li class="header-subnavListItem{if $subnavListItem == 'team'} header-subnavListItemActive{/if}"><a href="/team">Team</a></li>
								<li class="header-subnavListItem{if $subnavListItem == 'contact'} header-subnavListItemActive{/if}"><a href="/contact">Contact</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</header>
			<div id="body">
				{block name="body"}{/block}
			</div>
			<footer id="footer" class="footer">
				<div class="footer-about">
					<h3 class="footer-header">ABOUT</h3>
					<p class="footer-aboutDesc">Flashbent is a design firm serving the Greater San Francisco Bay Area offering premium interior design and event coordiation services.</p>
				</div>
				<div class="footer-contact">
					<h3 class="footer-header">CONTACT</h3>
					<div>
						<div class="footer-contactinfo">p | <a href="tel:5105788735">510.578.8735</a></div>
						<div class="footer-contactinfo"> e | <a href="mailto:info@flashbent.com">info@flashbent.com</a></div>
						<div class="footer-contactinfo">sf bay area, ca</div>
					</div>
				</div>
			</footer>
		</div>
		{block name='bodyBottom'}{/block}
	</body>
</html>
<!-- Copyright © 2012-{'Y'|date} Flashbent. -->