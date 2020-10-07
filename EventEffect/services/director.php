
<?php if( get_field('director__title') ): ?>
<?php if( get_field('director__content') ): ?>
<?php if( get_field('director__img') ): ?>
	<section class="director director--no-bg">
		<div class="director__container container">

			<div class="director__description">
				<?php the_field('director__title'); ?>
				<div class="director__text">
					<?php the_field('director__content'); ?>
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
				<img src="<?php the_field('director__img'); ?>" alt="">
			</div>

		</div>
	</section>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>