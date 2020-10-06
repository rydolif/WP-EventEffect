<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<section class="hero">
		<div class="hero__container container">

			<div class="hero__arrow">
				<a href="#info"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
			</div>

			<h1 class="hero__title">
				Интерактивные развлечения <br>для Вашего меропртиятия по привлекательным ценам 
				<span class="sity">в Москве</span>
			</h1>

			<p class="hero__subtitle">Получите скидку на наши услуги, ответив на 4 вопроса </p>
			<a href="#" class="hero__btn order__open">Получить скидку</a>
			
		</div>
	</section>

	<?php get_template_part( 'parts/info' ); ?>

	<section class="director">
		<div class="director__container container">

			<div class="director__description">
				
				<h2 class="director__title"><?php the_field('director__title', 'option'); ?></h2>
				<div class="director__text">
					<?php the_field('director__content', 'option'); ?>
				</div>
				<div class="director__soc">
					<b>Подписывайтесь на мои социальные сети:</b>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
					</a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
					</a>
				</div>
			</div>

			<div class="director__img">
				<div class="parallax parallax__circle"></div>
				<img src="<?php the_field('director__img', 'option'); ?>" alt="">
			</div>

		</div>
	</section>

	<section class="services">

		<div class="parallax parallax__circle"></div>
		<div class="parallax parallax__border"></div>

		<div class="services__container container">
			
			<h2 class="services__title">Мы <span>предлагаем</span></h2>

			<div class="services__list">

				<?php if( have_rows('services__list') ): ?>
					<?php while( have_rows('services__list') ): the_row(); 
						$img = get_sub_field('img');
						$link = get_sub_field('link');
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						?>

						<a href="<?php echo $link; ?>" class="services__item">
							<div  class="services__img">
								<img src="<?php echo $img; ?>" alt="">
								<span><?php echo $title; ?></span>
							</div>
							<h3 class="services__subtitle"><?php echo $title; ?></h3>
							<p class="services__text"><?php echo $text; ?></p>
						</a>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>

		</div>
	</section>

	<section class="partners">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax1.png" alt="" class="parallax parallax__arrow-left">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax2.png" alt="" class="parallax parallax__arrow-right">

		<div class="container">

			<h2 class="partners__title">Наши <span>заказчики и партнеры</span></h2>

			<div class="partners__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon1.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon7.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon13.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon2.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon8.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon14.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon3.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon9.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon15.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon4.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon10.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon16.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon5.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon11.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon17.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon6.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon12.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon18.svg" alt="">
					</div>
				</div>
				<div class="partners__pagination"></div>
			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/application' ); ?>

<?php get_footer(); ?>