<footer class="footer-1">
	<section class="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="footer-logo"> <a href="/"><img src="/assets/img/footer-logo.png"></a></div>{{template.footer-tekst[textarea]}}</div>
				<div class="col-xs-12 col-md-6">

                        <?php global $argseo; ?>
                            <?php if ($argseo["id"] != 312) { ?>

                    <div class="form-title">Vragen staat vrij</div>

                    <div class="form ta-left">

                        <form action="/controllers/contact" method="post">
                            <div class="form-row">
                                <div class="form-field label-inside"><input type="text" placeholder="Bedrijfsnaam"></div>
                            </div>

                            <div class="form-row">
                                <div class="form-field label-inside"><input type="text" placeholder="E-mail"></div>
                            </div>

                            <div class="form-row">
                                <div class="form-field label-inside"><textarea placeholder="Bericht"></textarea></div>
                            </div>

                            <div class="error"></div>

                            <div class="form-row submit">
                                <div class="form-field">
                                    <p class="button alt2 ta-xs-right">
                                    	<button type="submit">{{template.contact-form-button}}</button>
                                    </p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                            <?php } ?>

			</div>
		</div>
	</section>
	<section class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 clear-gutter_b-xs reset-gutter_b-md">&copy; <?php echo date('Y') ?> Mega Transport</div>
				<div class="col-xs-12 col-md-6 ta-md-right"> Creatie & realisatie <a href="https://themindoffice.nl/" target="_blank">The MindOffice</a></div><a class="back-to-top" href="#" data-scrollto="top"></a></div>
		</div>
	</section>
</footer>