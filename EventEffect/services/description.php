

<?php if( get_field('content') ): ?>
<?php if( get_field('gallery') ): ?>
<?php if( get_field('iframe') ): ?>
	<section class="description">
		<div class="parallax parallax__circle"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax1.png" alt="" class="parallax parallax__arrow-left">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax2.png" alt="" class="parallax parallax__arrow-right">

		<div class="description__container container tabs">

			<?php if( have_rows('gallery') ): ?>
				<?php while( have_rows('gallery') ): the_row(); 
					$image = get_sub_field('image');
					?>

					<div class="description__img tabs__wrap">
						<img src="<?php echo $image; ?>" alt="">
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

			<div class="description__content">
				<div class="description__content_text">
					<?php the_field('content'); ?>
				</div>

				<?php if( have_rows('gallery') ): ?>
					<div class="description__tabs_wrap">
						<?php while( have_rows('gallery') ): the_row(); 
							$tab__text = get_sub_field('tab__text');
							$tab__img = get_sub_field('tab__img');
						?>

							<div class="description__tabs_item tabs__item">
								<?php if ($tab__img) { ?>
									<img src="<?php echo $tab__img; ?>" alt="">
								<?php }  ?>
								<?php if ($tab__text) { ?>
									<p><?php echo $tab__text; ?></p>
								<?php }  ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<a data-fancybox href="<?php the_field('iframe'); ?>" class="btn btn--play">
					<span>Смотреть видео <br>о <?php the_title(); ?> </span>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
				</a>
			</div>


		</div>
	</section>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>


