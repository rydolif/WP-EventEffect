
	<section class="hero" style="background-image: url(<?php the_field('hero__bg'); ?>);">
		<div class="container">
			

			<div class="hero__arrow">
				<a href="#info"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
			</div>

			<?php the_field('title'); ?>

			<p class="hero__subtitle">Получите скидку на наши услуги, ответив на 4 вопроса </p>
			<a href="#" class="hero__btn order__open">Получить скидку</a>
			
		</div>
	</section>