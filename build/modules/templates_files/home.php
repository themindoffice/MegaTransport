<?php include("includes/_page-start.php") ?>
<div id="page" data-target="top">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-3.php") ?>
	<main>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 section-header">
						<h1>{{page.intro-titel}}</h1>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 content">{{page.intro-tekst[textarea]}}</div>
				</div>
			</div>
		</section>
		<section class="is-grey">
			<div class="container">
				<div class="row">@views_cards@</div>
			</div>
		</section>
		<section data-target="tabs">
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h2>{{page.tabs-titel}}</h2>
						<hr>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10">
						<div class="tabs">
							<div class="handlers">@views_tab_handlers@</div>
							<div class="contents content ta-xs-center">@views_tab_content@</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include("includes/_gallery-1.php") ?>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h2>{{page.accordion-titel}}</h2>
						<hr>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 content ta-xs-center">
						<div id="accordion-2" class="accordion">@views_accordion@</div>
					</div>
				</div>
			</div>
		</section>
		<?php include("includes/_banner-1.php") ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6 content">{{template.form-tekst[textarea]}}</div>
					<div class="col-xs-12 col-lg-6">
						<div class="form ta-left">
							<form method="post">
								<div class="form-row">
									<div class="form-field label-inside required"> <input type="text" placeholder="Naam"></div>
								</div>
								<div class="form-row error">
									<div class="form-field label-inside required"> <input type="text" placeholder="E-mail"></div>
								</div>
								<div class="form-row">
									<div class="form-field label-inside required"> <select><option class="default" value="Selectie 1">Selectie 1</option><option value="Selectie 2">Selectie 2</option><option value="Selectie 3">Selectie 3</option><option value="Selectie 4">Selectie 4</option><option value="Selectie 5">Selectie 5</option></select>
										<span
										 class="icon"></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-field label-inside"><textarea placeholder="Bericht"></textarea></div>
								</div>
								<div class="form-row submit">
									<div class="form-field">
										<p class="button alt hover-ball"><a href="#"><span>{{template.contact-form-button}}</span></a></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include("includes/_footer-1.php") ?>
</div>
<?php include("includes/_mobile-menu.php") ?>
<?php include("includes/_page-end.php") ?>