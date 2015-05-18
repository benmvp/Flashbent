{extends '_layouts/main.tpl'}

{block name='headContent'}
	<link rel="stylesheet" type="text/css" href="/css/index.css" />
{/block}

{block name='body'}
	<div class="mainLinks">
		<a href="/interiors" class="mainLinks-link mainLinks-interiorsLink">
			<div class="mainLinks-contentShell">
				<h2 class="mainLinks-contentHeader">Interiors</h2>
				<span class="mainLinks-description">Wide range of interior design services to tackle any project</span>
			</div>
		</a>
		<a href="/events" class="mainLinks-link mainLinks-eventsLink">
			<div class="mainLinks-contentShell">
				<h2 class="mainLinks-contentHeader">Events</h2>
				<span class="mainLinks-description">Wide range of event planning/coordination services to make any event successful</span>
			</div>
		</a>
		<a href="/shoppes" class="mainLinks-link mainLinks-shoppesLink">
			<div class="mainLinks-contentShell">
				<h2 class="mainLinks-contentHeader">Shoppes</h2>
				<span class="mainLinks-description">A marketplace of various products to give as gifts or use for personal expression</span>
			</div>
		</a>
	</div>
{/block}