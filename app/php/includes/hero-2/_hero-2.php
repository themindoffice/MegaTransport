<section class="hero-2">
	@if (slides.length > 0) {
		<div class="owl-carousel">
		@for (var i = 0; i < slides.length; i++) {
			<img class="lazy object-cover" data-src="slir{w1920}`+slides[i]+`">
		}
		</div>
	}
	<div class="box">
		<div class="title"><content name="page.hero-titel">@title</content></div>
		<div class="subtitle"><content name="page.hero-subtitel">@subtitle</content></div>
		<div class="text"><content name="page.hero-tekst[textarea]">@text</content></div>
		@if (buttons.length > 0) {
			<div class="buttons">
			@for (var i = 0; i < buttons.length; i++) {
				<p class="`+buttons[i].class+` hover-ball"><a href="`+buttons[i].href+`"><span>`+buttons[i].label+`</span></a></p>
			}
			</div>
		}
	</div>
</section>