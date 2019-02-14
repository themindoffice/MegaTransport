<?php include("includes/_page-start.php") ?>
    <div id="page" data-target="top">
        <?php include("includes/_header-1.php") ?>
        <?php include("includes/_hero-2.php") ?>
        <main>
            <section>
                <div class="container">
                    <div class="row">

                        @views_nieuws@

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