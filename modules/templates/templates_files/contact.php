<?php include("includes/_page-start.php") ?>
    <div id="page" data-target="top">
        <?php include("includes/_header-1.php") ?>
        <?php include("includes/_hero-2.php") ?>
        <main>
            <section class="about-us">
                <div class="container">
                    <div class="row ha-xs-center va-xs-center">
                        <div class="col-xs-12 col-md-6">
                            <div class="row-title content">
                                <h2>{{page.blok-titel-1-1}}&nbsp;<span>{{page.blok-titel-1-2}}</span></h2>
                            </div>
                            <div class="content">{{page.blok-tekst-1[textarea]}}</div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-title">Vragen staat vrij</div>

                            <div class="form ta-left">

                                <form action="/controllers/contact" method="post">
                                    <div class="form-row">
                                        <div class="form-field label-inside"><input type="text" placeholder="Bedrijfsnaam">
                                        </div>
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
                                            <p class="button ta-xs-right">
                                            	<button type="submit">{{template.contact-form-button}}</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>

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
                        <div class="col-xs-12 col-md-7 section-header order-xs-2 order-md-0">
                            <iframe width="100%" height="325" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Productiestraat+83+3133ES+Vlaardingen&key=AIzaSyB9V3MpPJCRniQ_xjVgCBq9iGo_eybva64" allowfullscreen></iframe>
                        </div>
                        <div class="col-xs-12 col-md-5">
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