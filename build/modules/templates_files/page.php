<?php include("includes/_page-start.php") ?>
<div id="page" data-target="top">
	<?php include("includes/_header-1.php") ?>
	<?php include("includes/_hero-1.php") ?>
	<main>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h1>{{page.intro-titel}}</h1>
					</div>
				</div>
				<div class="row ha-xs-center">
					<div class="col-xs-12 content ta-xs-center">{{page.intro-tekst[textarea]}}</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row ha-xs-center">
					<div class="col-xs-12 col-lg-11 col-xl-10 ta-xs-center section-header">
						<h2>{{page.page-titel}}</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-lg-6 content ta-xs-center">{{page.page-tekst-1[textarea]}}</div>
					<div class="col-xs-12 col-lg-6 content ta-xs-center">{{page.page-tekst-2[textarea]}}</div>
				</div>
			</div>
		</section>
	</main>
	<?php include("includes/_footer-1.php") ?>
</div>
<?php include("includes/_mobile-menu.php") ?>
<?php include("includes/_page-end.php") ?>