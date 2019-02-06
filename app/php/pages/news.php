@include('page-start/_page-start.php')
<div id="page" data-target="top">
	@include('header-1/_header-1.php')
	@include('hero-2/_hero-2.php', {
		"title": "Nieuws"
	})
	<main>
		<section>
			<div class="container">
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