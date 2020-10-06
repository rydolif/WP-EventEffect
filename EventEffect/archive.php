

<?php get_header(); ?>

	<section class="blog">
		<div class="container">

			<h2 class="blog__title">Блог</h2>
			<p class="blog__desc">Наши мероприятия, события из жизни компании, полезные статьи</p>

			<div class="blog__list">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="blog__item">
						<a href="<?php the_permalink() ?>"  class="blog__img">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-photo.png" alt="<?php the_title(); ?>" />
							<?php } ?>
						</a>
						<h3 class="blog__subtitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<div class="blog__text">
							<?php the_excerpt(); ?>
						</div>
						<div class="blog__more">
							<time datetime="1969-07-16">
								<?php echo get_the_date('Y-m-d'); ?>
							</time>
							<a href="<?php the_permalink() ?>">Подробнее</a>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<div class="blog__btn">
				<?php wptuts_pagination(); ?>
			</div>

		</div>
	</section>

<?php get_footer(); ?>