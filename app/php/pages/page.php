@include('page-start/_page-start.php')
<div id="page" data-target="top">
	@include('header-1/_header-1.php')
	@include('hero-1/_hero-1.php', {
		"image": "files/banner-1.jpg",
		"title": "Vervolgpagina",
		"subtitle": "deze pagina staat los van de homepage",
		"text": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec justo at augue tempor imperdiet. Praesent vulputate ligula sit amet vehicula iaculis. Fusce vitae consequat mi",
		"buttons": [
			{"label": "button", "href": "#", "class": "button"},
			{"label": "button alt", "href": "#", "class": "button  alt"}
		]
	})
	<main>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h1><content name="page.intro-titel">Intro</content></h1>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 content ta-xs-center">
						<content name="page.intro-tekst[textarea]">
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit. Curabitur ut auctor enim. Phasellus eu auctor nulla. Duis ullamcorper dolor id diam sagittis, placerat tempor metus dignissim. Vestibulum quis orci vel lorem iaculis tempus. Curabitur ut auctor enim. Phasellus eu auctor nulla. Duis ullamcorper dolor id diam sagittis, placerat tempor metus dignissim. Vestibulum quis orci vel lorem iaculis tempus.
						</content>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h2><content name="page.page-titel">Pagina titel</content></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-6 content ta-xs-center">
						<content name="page.page-tekst-1[textarea]">
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit. Curabitur ut auctor enim. Phasellus eu auctor nulla. Duis ullamcorper dolor id diam sagittis, placerat tempor metus dignissim. Vestibulum quis orci vel lorem iaculis tempus. Curabitur ut auctor enim. Phasellus eu auctor nulla. Duis ullamcorper dolor id diam sagittis, placerat tempor metus dignissim. Vestibulum quis orci vel lorem iaculis tempus.
						</content>
					</div>
					<div class="col-xs-12 col-lg-6 content ta-xs-center">
						<content name="page.page-tekst-2[textarea]">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat turpis vel ex sollicitudin pharetra. Aliquam leo nisl, mollis eu ligula et, maximus imperdiet lorem. Maecenas congue vel leo eget tincidunt. Cras ac auctor sapien. Vestibulum nec odio non nulla convallis pretium. Duis consectetur ipsum vel diam pharetra, id dictum quam efficitur. Aliquam erat volutpat. Morbi neque est, eleifend a nisi tempor, imperdiet commodo tellus. In lacus est, finibus vitae ullamcorper at, iaculis in diam.
						</content>
					</div>
				</div>
			</div>
		</section>
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')