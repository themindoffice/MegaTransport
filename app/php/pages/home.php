@include('page-start/_page-start.php')
<div id="page" data-target="top">
	@include('header-1/_header-1.php')
	@include('hero-3/_hero-3.php', {
		"video": "files/timelapse.mp4",
		"poster": "files/banner-1.jpg",
		"title": "Hero titel",
		"subtitle": "Hero subtitel",
		"text": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec justo at augue tempor imperdiet. Praesent vulputate ligula sit amet vehicula iaculis. Fusce vitae consequat mi",
		"buttons": [
			{"label": "button", "href": "#", "class": "button"},
			{"label": "button alt", "href": "#", "class": "button alt"}
		]
	})
	<main>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 section-header">
						<h1><content name="page.intro-titel">Intro</content></h1>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 content">
						<content name="page.intro-tekst[textarea]">
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit. Curabitur ut auctor enim. Phasellus eu auctor nulla. Duis ullamcorper dolor id diam sagittis, placerat tempor metus dignissim. Vestibulum quis orci vel lorem iaculis tempus. Curabitur ut auctor enim. Phasellus eu auctor nulla. Duis ullamcorper dolor id diam sagittis, placerat tempor metus dignissim. Vestibulum quis orci vel lorem iaculis tempus.
							<br><br>
							<h1>Header 1</h1>
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit.
							<br><br>
							<h2>Header 2</h2>
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit.
							<br><br>
							<h3>Header 3</h3>
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit.
							<br><br>
							<h4>Header 4</h4>
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit.
							<br><br>
							<h5>Header 5</h5>
							Suspendisse elit mauris, congue sed ipsum a, varius interdum orci. Donec metus ante, ultricies sed lacinia nec, pharetra vel lectus. Sed viverra, magna in eleifend dapibus, lectus metus mollis mauris, vel faucibus ipsum justo faucibus elit. Suspendisse mollis porta hendrerit.
							<br><br>
							<h6>Header 6</h6>
							<hr>
							<table>
								<tr>
									<th>table header</th>
									<th>table header</th>
									<th>table header</th>
								</tr>
								<tr>
									<td>suspendisse elit</td>
									<td>congue sed ipsum</td>
									<td>vel faucibus</td>
								</tr>
								<tr>
									<td>suspendisse elit</td>
									<td>congue sed ipsum</td>
									<td>vel faucibus</td>
								</tr>
								<tr>
									<td>suspendisse elit</td>
									<td>congue sed ipsum</td>
									<td>vel faucibus</td>
								</tr>
							</table>
							<ul>
								<li>Donec metus ante ultricies sed lacinia nec</li>
								<li>Donec metus ante ultricies sed lacinia nec</li>
								<li>Donec metus ante ultricies sed lacinia nec</li>
								<li>Donec metus ante ultricies sed lacinia nec</li>
							</ul>
							<ol>
								<li>Donec metus ante ultricies sed lacinia nec</li>
								<li>Donec metus ante ultricies sed lacinia nec</li>
								<li>Donec metus ante ultricies sed lacinia nec</li>
								<li>Donec metus ante ultricies sed lacinia nec</li>
							</ol>
						</content>
					</div>
				</div>
			</div>
		</section>
		<section class="is-grey">
			<div class="container">
				<div class="row">
					<view name="cards">
						<div class="col-md-6 col-lg-4 card ta-xs-center" data-transition="slide-left" data-delay="300">
							<div class="card-inner">
								<div class="card-header">
									<span>Card header</span>
								</div>
								<div class="card-image">
									<img class="lazy" data-src="files/gallery-full-01.jpg">
								</div>
								<div class="card-content content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis enim, auctor ac ligula vel, vehicula cursus felis. Donec imperdiet risus quis massa iaculis, eget vestibulum nisl malesuada.</p>
								</div>
								<div class="card-button">
									<p class="button alt hover-ball"><a href="#"><span>Card button</span></a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 card ta-xs-center" data-transition="slide-top">
							<div class="card-inner">
								<div class="card-header">
									<span>Card header</span>
								</div>
								<div class="card-image">
									<img class="lazy" data-src="files/gallery-full-02.jpg">
								</div>
								<div class="card-content content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis enim, auctor ac ligula vel, vehicula cursus felis. Donec imperdiet risus quis massa iaculis, eget vestibulum nisl malesuada.</p>
								</div>
								<div class="card-button">
									<p class="button alt hover-ball"><a href="#"><span>Card button</span></a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 card ta-xs-center" data-transition="slide-right" data-delay="600">
							<div class="card-inner">
								<div class="card-header">
									<span>Card header</span>
								</div>
								<div class="card-image">
									<img class="lazy" data-src="files/gallery-full-03.jpg">
								</div>
								<div class="card-content content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis enim, auctor ac ligula vel, vehicula cursus felis. Donec imperdiet risus quis massa iaculis, eget vestibulum nisl malesuada.</p>
								</div>
								<div class="card-button">
									<p class="button alt hover-ball"><a href="#"><span>Card button</span></a></p>
								</div>
							</div>
						</div>
					</view>
				</div>
			</div>
		</section>
		<section data-target="tabs">
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h2><content name="page.tabs-titel">Tabs</content></h2>
						<hr>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10">
						<div class="tabs">
							<div class="handlers">
								<view name="tab handlers">
									<a class="active" href="#"><span>Tab 1</span></a>
									<a href="#"><span>Tab 2</span></a>
									<a href="#"><span>Tab 3</span></a>
								</view>
							</div>
							<div class="contents content ta-xs-center">
								<view name="tab content">
									<div class="active">
										<p>Etiam porttitor, risus vel sodales sollicitudin, velit felis lacinia lorem, eget tincidunt elit felis vitae nunc. Nullam venenatis, leo id eleifend consectetur, eros lorem placerat quam, nec condimentum odio tellus vel eros. Quisque ac justo vulputate, ullamcorper lectus ac, finibus justo. Fusce venenatis ligula eu dolor pulvinar varius.</p>
										<p>Nunc sagittis dictum purus, et tempor nibh sodales id. Suspendisse malesuada, metus ac semper placerat, sapien ligula volutpat felis, quis consectetur elit est dignissim magna. Nunc ac feugiat mauris. In lobortis hendrerit massa, placerat pellentesque elit facilisis sit amet.</p>
									</div>
									<div>
										<p>In lobortis hendrerit massa, placerat pellentesque elit facilisis sit amet. Donec convallis gravida sapien, at volutpat felis varius nec. Proin eget aliquam elit, ut congue enim. Pellentesque at nunc tempor, iaculis velit ac, convallis eros. Aenean dolor diam, volutpat nec diam aliquet, ultricies scelerisque lectus. Duis finibus, nulla quis bibendum bibendum, tellus sem suscipit ex, vel fermentum lorem est in purus.</p>
									</div>
									<div>
										<p>Etiam porttitor, risus vel sodales sollicitudin, velit felis lacinia lorem, eget tincidunt elit felis vitae nunc. Nullam venenatis, leo id eleifend consectetur, eros lorem placerat quam, nec condimentum odio tellus vel eros. Quisque ac justo vulputate, ullamcorper lectus ac, finibus justo. Fusce venenatis ligula eu dolor pulvinar varius. Nunc sagittis dictum purus, et tempor nibh sodales id. Suspendisse malesuada, metus ac semper placerat, sapien ligula volutpat felis, quis consectetur elit est dignissim magna. Nunc ac feugiat mauris. In lobortis hendrerit massa, placerat pellentesque elit facilisis sit amet.</p>
									</div>
								</view>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		@include('gallery-1/_gallery-1.php')
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h2><content name="page.accordion-titel">Accordion</content></h2>
						<hr>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 content ta-xs-center">
						<div id="accordion-2" class="accordion">
							<view name="accordion">
								<div class="accordion-item">
									<a class="accordion-handler" href="#">1. Zonnepanelen op eigen dak <span class="arrow"></span></a>
									<div class="accordion-content">
										<div class="accordion-content-inner">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar vel massa auctor tincidunt. In ipsum nibh, euismod non purus nec, consequat feugiat tellus. Vivamus vestibulum luctus mattis. Ut lectus turpis, consectetur vel est nec, imperdiet lacinia risus. In vel metus sagittis, ultrices sem at, malesuada ex. Sed sit amet metus id felis lacinia convallis. Sed hendrerit elementum erat eget sagittis. Fusce volutpat elit at nibh scelerisque, vel consequat metus feugiat. Suspendisse convallis sodales pulvinar.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<a class="accordion-handler" href="#">2. Zonnepanelen op een collectief dak <span class="arrow"></span></a>
									<div class="accordion-content">
										<div class="accordion-content-inner">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar vel massa auctor tincidunt. In ipsum nibh, euismod non purus nec, consequat feugiat tellus. Vivamus vestibulum luctus mattis. Ut lectus turpis, consectetur vel est nec, imperdiet lacinia risus. In vel metus sagittis, ultrices sem at, malesuada ex. Sed sit amet metus id felis lacinia convallis. Sed hendrerit elementum erat eget sagittis. Fusce volutpat elit at nibh scelerisque, vel consequat metus feugiat. Suspendisse convallis sodales pulvinar.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<a class="accordion-handler" href="#">3. Bedrijven en (semi) openbare gebouwen <span class="arrow"></span></a>
									<div class="accordion-content">
										<div class="accordion-content-inner">
											<p>Cras interdum finibus quam, ut blandit metus congue a. Mauris a bibendum turpis. Curabitur eu est eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris at pretium est. Integer aliquet est ac hendrerit pulvinar. Donec vestibulum sem tortor, facilisis auctor felis cursus eu. Aliquam sodales sem non risus tristique lobortis.</p>

											<p>Phasellus fringilla erat vel elit tempor, vitae finibus risus semper. Nam ut vulputate felis. Sed a dolor eget augue mollis congue et id lorem. Cras tellus diam, lobortis sit amet hendrerit eget, pulvinar at dui. Nunc ut enim risus. Donec dolor urna, scelerisque vitae dignissim vitae, tincidunt eget purus. Morbi suscipit ipsum ac bibendum blandit. Quisque in tortor et felis tristique egestas vitae eu nunc.</p>
										</div>
									</div>
								</div>
							</view>
						</div>
					</div>
				</div>
			</div>
		</section>
		@include('banner-1/_banner-1.php', {
			"image": "files/banner-2.jpg",
			"title": "Banner titel",
			"subtitle": "Banner subtitel",
			"text": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec justo at augue tempor imperdiet. Praesent vulputate ligula sit amet vehicula iaculis. Fusce vitae consequat mi",
			"buttons": [
				{"label": "button", "href": "#", "class": ""},
				{"label": "button alt", "href": "#", "class": "alt"}
			]
		})
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6 content">
						<content name="template.form-tekst[textarea]">
							<h3>Adres</h3>
							Koningin Wilhelminahaven NZ 2h<br>
							3134 KE Vlaardingen<br>
							(4de verdieping)
							<br><br>
							<h3>Contactgegevens</h3>
							T: +31(0)10 - 435 07 50<br>
							E: <a href="mailto:info@themindoffice.nl">info@themindoffice.nl</a>
							<br><br>
							<h3>Bedrijfsgegevens</h3>
							KVK: 50842749<br>
							BTW: NL12.75.34.842.B01
						</content>
					</div>
					<div class="col-xs-12 col-lg-6">
						<div class="form ta-left">
							<form method="post">
								<div class="form-row">
									<div class="form-field label-inside required">
										<input type="text" placeholder="Naam">
									</div>
								</div>
								<div class="form-row error">
									<div class="form-field label-inside required">
										<input type="text" placeholder="E-mail">
									</div>
								</div>
								<div class="form-row">
									<div class="form-field label-inside required">
										<select>
											<option class="default" value="Selectie 1">Selectie 1</option>
											<option value="Selectie 2">Selectie 2</option>
											<option value="Selectie 3">Selectie 3</option>
											<option value="Selectie 4">Selectie 4</option>
											<option value="Selectie 5">Selectie 5</option>
										</select>
										<span class="icon"></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-field label-inside">
										<textarea placeholder="Bericht"></textarea>
									</div>
								</div>
								<div class="form-row submit">
									<div class="form-field">
										<p class="button alt hover-ball">
											<a href="#"><span><content name="template.contact-form-button">Send message</content></span></a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	@include('footer-1/_footer-1.php')
</div>
@include('mobile-menu/_mobile-menu.php')
@include('page-end/_page-end.php')