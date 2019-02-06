<?php include("includes/_page-start.php") ?>
<div id="page" data-target="top">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-1.php") ?>
	<main>
		<section class="home-intro">
			<div class="container">
				<div class="row ha-xs-center va-xs-center">
					<div class="col-xs-12 col-lg-6 section-header">
						<h1>{{page.intro-titel-1}}</h1>
						<h2>{{page.intro-titel-2}}</h2>
					</div>
					<div class="col-xs-12 col-lg-6 content">
						<div class="content">{{page.intro-tekst[textarea]}}</div>
						<div class="button ta-xs-right"> <a href="{{page.intro-button-url}}"><span>Lees verder</span></a></div>
					</div>
				</div>
			</div>
		</section>
		<section class="banner-split">
			<div class="container">
				<div class="row ha-xs-right va-xs-center">
					<div class="col-xs-12 col-md-6">
						<div class="box">
							<div class="title">{{template.banner-1-titel-1}}&nbsp;<span>{{template.banner-1-titel-2}}</span></div>
							<div class="text">{{template.banner-1-text[textarea]}}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container fluid-xs">
				<div class="row clear-gutter_h-xs">
					<div class="col-xs-12 col-md-6 hidden-xs visible-md image cover" style="background-image:url({{template.banner-1-afbeelding}});"></div>
					<div class="col-xs-12 col-md-6 background"></div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 section-header">
						<h3>{{page.news-title-1}}</h3>
						<h4>{{page.news-title-2}}</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-4 card">
						<div class="card-inner">
							<div class="card-image"> <img src="files/news-img-1.jpg"></div>
							<div class="card-content content">
								<h5>Titel nieuwsbericht</h5> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
								nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…</div>
							<div class="card-button">
								<p class="button"><a href="#"><span>Lees verder</span></a></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4 card">
						<div class="card-inner">
							<div class="card-image"> <img src="files/news-img-2.jpg"></div>
							<div class="card-content content">
								<h5>Titel nieuwsbericht</h5> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
								nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…</div>
							<div class="card-button">
								<p class="button"><a href="#"><span>Lees verder</span></a></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4 card">
						<div class="card-inner">
							<div class="card-image"> <img src="files/news-img-3.jpg"></div>
							<div class="card-content content">
								<h5>Titel nieuwsbericht</h5> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
								nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…</div>
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
						<h2>{{template.banner-2-title}}</h2> -{{template.banner-2-name}}</div>
					<div class="col-xs-12 col-md-4 button alt2"> <a href="{{template.banner-2-button-url}}">Neem contact op</a></div>
				</div>
			</div>
		</section>
		<section class="contact-info">
			<div class="container">
				<div class="row ha-xs-center va-xs-center">
					<div class="col-xs-12 col-md-6 section-header order-xs-2 order-md-0"> <img src="files/content-img-1.jpg"></div>
					<div class="col-xs-12 col-md-6">
						<div class="content">
							<h2>{{template.contactgegevens-title}}</h2>{{template.contactgegevens-tekst[textarea]}}</div>
						<ul class="social">
							<li><a href="{{template.facebook-url}}" class="icon-facebook"></a></li>
							<li><a href="{{template.linkedin-url}}" class="icon-linkedin"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include("includes/_footer-1.php") ?>
</div>
<?php include("includes/_page-end.php") ?>