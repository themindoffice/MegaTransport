@include('page-start/_page-start.php')
<div id="page" data-target="top">
	@include('header-1/_header-1.php')
	@include('hero-1/_hero-1.php', {
		"image": "files/hero-1.png",
		"title": "Meester in het vervoeren van Massa"
	})
	<main>
		<section class="home-intro">
			<div class="container">
				<div class="row ha-xs-center va-xs-center">
					<div class="col-xs-12 col-lg-6 section-header">
						<h1><content name="page.intro-titel-1">Exceptioneel</content></h1>
						<h2><content name="page.intro-titel-2">Transport</content></h2>
					</div>
					<div class="col-xs-12 col-lg-6 content">
						<div class="content">
							<content name="page.intro-tekst[textarea]">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
							</content>
						</div>
						<div class="button ta-xs-right">
							<a href="content{page.intro-button-url, #}"><span>Lees verder</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="banner-split">
			<div class="container">
				<div class="row ha-xs-right va-xs-center">
					<div class="col-xs-12 col-md-6">
						<div class="box">
							<div class="title">
								<content name="template.banner-1-titel-1">Mega</content>&nbsp;
								<span><content name="template.banner-1-titel-2">trailer</content></span>
							</div>
							<div class="text">
								<content name="template.banner-1-text[textarea]">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
								</content>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container fluid-xs">
				<div class="row clear-gutter_h-xs">
					<div class="col-xs-12 col-md-6 hidden-xs visible-md image cover" style="background-image:url(content{template.banner-1-afbeelding, files/banner-1.jpg});"></div>
					<div class="col-xs-12 col-md-6 background"></div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h3><content name="page.news-title-1">Laatste</content></h3>
						<h4><content name="page.news-title-2">nieuws</content></h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-4 card">
						<div class="card-inner">
							<div class="card-image">
								<img src="files/news-img-1.jpg">
							</div>
							<div class="card-content content">
								<h5>Titel nieuwsbericht</h5>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…
							</div>
							<div class="card-button">
								<p class="button"><a href="#"><span>Lees verder</span></a></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4 card">
						<div class="card-inner">
							<div class="card-image">
								<img src="files/news-img-2.jpg">
							</div>
							<div class="card-content content">
								<h5>Titel nieuwsbericht</h5>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…
							</div>
							<div class="card-button">
								<p class="button"><a href="#"><span>Lees verder</span></a></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4 card">
						<div class="card-inner">
							<div class="card-image">
								<img src="files/news-img-3.jpg">
							</div>
							<div class="card-content content">
								<h5>Titel nieuwsbericht</h5>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…
							</div>
							<div class="card-button">
								<p class="button"><a href="#"><span>Lees verder</span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="banner-cta">
			<div class="image cover" style="background-image:url(files/banner-1.jpg);"></div>
			<div class="container">
				<div class="row va-xs-center">
					<div class="col-xs-12 col-md-8">
						<h2><content name="template.banner-2-title">‘Ruimte voor een mooie quote van de eigenaar van Mega Transport.’</content></h2>
						- <content name="template.banner-2-name">Arjan Kal</content>
					</div>
					<div class="col-xs-12 col-md-4 button alt2">
						<a href="content{template.banner-2-button-url, #}">Neem contact op</a>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-info">
			<div class="container">
				<div class="row ha-xs-center va-xs-center">
					<div class="col-xs-12 col-md-6 section-header order-xs-2 order-md-0">
						<img src="files/content-img-1.jpg">
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="content">
							<h2><content name="template.contactgegevens-title">Contact</content></h2>
							<content name="template.contactgegevens-tekst[textarea]">
								Produktiestraat 83<br>
								3133 ES <br>
								Vlaardingen
								<br><br>
								<strong>T</strong> +31-107 370 565<br>
								<strong>E</strong> info@megatransport.nl
							</content>
						</div>
						<ul class="social">
							<li><a href="content{template.facebook-url, #}" class="icon-facebook"></a></li>
							<li><a href="content{template.linkedin-url, #}" class="icon-linkedin"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('page-end/_page-end.php')