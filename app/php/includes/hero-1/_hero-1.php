<section class="hero-1" data-parallax="parallax">
	<div class="parallax">
		<img class="lazy" data-src="slir{w1920}content{page.hero-afbeelding[image], @image}">
	</div>
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