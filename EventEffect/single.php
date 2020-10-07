
<?php get_header(); ?>

	<section class="article">
		<div class="container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<article class="article__content">
					<div class="article__img">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-photo.png" alt="<?php the_title(); ?>" />
						<?php } ?>
					</div>
					<div class="article__text">
						<h1 class="article__title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<time class="article__date" datetime="1969-07-16">
							<b><?php echo get_the_date('Y-m-d'); ?></b>
						</time>
					</div>
				</article>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</section>

	<?php if( have_rows('finall', 'option') ): ?>
		<section class="finall">
			<div class="container">

				<h2 class="article__subtitle">Ещё больше фото! </h2>

				<div class="slider-services">
					<div class="swiper-wrapper">

					<?php while( have_rows('finall', 'option') ): the_row(); 
						$img = get_sub_field('img', 'option');
						$iframe = get_sub_field('iframe', 'option');
						?>

						<a data-fancybox href="<?php echo $iframe; ?>" class="swiper-slide" >
							<img src="<?php echo $img; ?>" alt="">
						</a>
					<?php endwhile; ?>

					</div>
					<!-- Add Arrows -->
					<div class="slider-services__next"></div>
					<div class="slider-services__prev"></div>
				</div>

			</div>
		</section>
	<?php endif; ?>

	<div class="article__btn">
		<a href="<?php echo get_home_url(); ?>/blog/" class="">Смотреть еще</a>
	</div>

<?php get_footer(); ?>