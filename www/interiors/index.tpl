{extends '../_layouts/main.tpl'}

{block name='headContent'}
	<link rel="stylesheet" type="text/css" href="/css/interiors/index.css" />
{/block}

{block name='body'}
	<ul class="portfolioCarousel">
		<li class="portfolioCarousel-slide portfolioCarousel-slideActive">
			<span class="portfolioCarousel-slideText">First portfolio image</span>
		</li>
		<li class="portfolioCarousel-slide">
			<span class="portfolioCarousel-slideText">Second portfolio image</span>
		</li>
		<li class="portfolioCarousel-slide">
			<span class="portfolioCarousel-slideText">Third portfolio image</span>
		</li>
		<li class="portfolioCarousel-slide">
			<span class="portfolioCarousel-slideText">Fourth portfolio image</span>
		</li>
	</ul>
	
	<section class="serviceSection serviceSection-residential">
		<div class="serviceSection-headerShell">
			<h2 class="serviceSection-header">Residential</h2>
			<span class="serviceSection-bar"></span>
		</div>
		<div class="serviceSection-body">
			<div class="serviceSection-image"></div>
			<div class="serviceSection-content">
				<ul class="serviceSection-contentList">
					<li>Style & Aesthetic Discovery</li>
					<li>Space Planning & Design</li>
					<li>Color & Decor Selection</li>
					<li>Kitchen & Bath Design</li>
					<li>Schematic Floor Plans (Construction, Lighting, Electrical, etc.)</li>
					<li>2D & 3D Renderings</li>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="serviceSection serviceSection-commercial">
		<div class="serviceSection-headerShell">
			<h2 class="serviceSection-header">Commercial</h2>
			<span class="serviceSection-bar"></span>
		</div>
		<div class="serviceSection-body">
			<div class="serviceSection-image"></div>
			<div class="serviceSection-content">
				<ul class="serviceSection-contentList">
					<li>Corporate Workspaces</li>
					<li>Style & Aesthetic Discovery</li>
					<li>Strategic Space Planning & Design</li>
					<li>Color & Decor Selection</li>
					<li>Schematic Floor Plans (Construction, Lighting, Electrical, etc.)</li>
					<li>2D & 3D Renderings</li>
				</ul>
			</div>
		</div>
	</section>
	
	<p class="description">Flashbent Interiors is an interior design firm in the Greater San Francisco Bay Area offering premium residential and commerciation interior design services. We specialize in clean, modern, and functional design. We can provide you with a range of interior design services to suit a range of project needs. We are here to make your dreams a reality and assist you where we can.</p>
{/block}