<section class="banner-1" data-parallax="parallax">
	<div class="image">
		<img class="lazy object-cover" data-src="content{page.banner-afbeelding[image], @image}">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-lg-8 col-xl-6">
				<div class="box">
					<div class="title"><content name="page.banner-titel">@title</content></div>
					<div class="subtitle"><content name="page.banner-subtitel">@subtitle</content></div>
					<div class="text"><content name="page.banner-tekst[textarea]">@text</content></div>
					@if (buttons.length > 0) {
						<div class="buttons">
						@for (var i = 0; i < buttons.length; i++) {
							<p class="button `+buttons[i].class+` hover-ball"><a href="`+buttons[i].href+`"><span>`+buttons[i].label+`</span></a></p>
						}
						</div>
					}
				</div>
			</div>
		</div>
	</div>
</section>