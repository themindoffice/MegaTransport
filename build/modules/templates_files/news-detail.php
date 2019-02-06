<?php include("includes/_page-start.php") ?>
<div id="page" data-target="top">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-2.php") ?>
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-xl-9 card">
						<div class="card-inner">
							<div class="card-image"> <img src="files/news-detail.jpg"></div>
							<div class="card-content">
								<div class="content"> <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim…</strong><br><br>									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan iaculis eros et eleifend. Donec rutrum lectus egestas, tempor nulla in, congue neque. Cras sit amet mauris dictum, finibus elit eu, tincidunt justo. Suspendisse bibendum
									malesuada metus. Donec lobortis ultrices justo a volutpat<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan iaculis eros et eleifend. Donec rutrum lectus egestas, tempor nulla in, congue neque. Cras sit amet mauris
									dictum, finibus elit eu, tincidunt justo. Suspendisse bibendum malesuada metus. Donec lobortis ultrices justo a volutpat<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan iaculis eros et eleifend. Donec rutrum lectus
									egestas, tempor nulla in, congue neque. Cras sit amet mauris dictum, finibus elit eu, tincidunt justo. Suspendisse bibendum malesuada metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan iaculis eros et eleifend. Donec
									rutrum lectus egestas, tempor nulla in, congue neque. Cras sit amet mauris dictum, finibus elit eu, tincidunt justo. Suspendisse bibendum malesuada metus.</div>
								<div class="row photo-album">
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item"><a data-fancybox="gallery" href="files/news-detail.jpg" class="cover" style="background-image:url(files/news-img-1.jpg);"><span class="icon-search-plus"></span></a></div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item"><a data-fancybox="gallery" href="files/news-detail.jpg" class="cover" style="background-image:url(files/news-img-1.jpg);"><span class="icon-search-plus"></span></a></div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item"><a data-fancybox="gallery" href="files/news-detail.jpg" class="cover" style="background-image:url(files/news-img-1.jpg);"><span class="icon-search-plus"></span></a></div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 item"><a data-fancybox="gallery" href="files/news-detail.jpg" class="cover" style="background-image:url(files/news-img-1.jpg);"><span class="icon-search-plus"></span></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 col-xl-3">
						<div class="more-info"> <img src="/assets/img/footer-logo.png">
							<div class="content"> Meer informatie over onze dienstverlening?<br><br> <strong>Bel ons</strong><br> (0)10 - 435 55 40<br><br> Of mail ons</div>
							<div class="button ta-xs-right"> <a href="#"><span>Contact</span></a></div>
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