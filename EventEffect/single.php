
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

	<?php get_template_part( 'services/finall' ); ?>

	<div class="article__btn">
		<a href="<?php echo get_home_url(); ?>/blog/" class="">Смотреть еще</a>
	</div>

<?php get_footer(); ?>