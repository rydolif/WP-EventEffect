<?php
/* Template name: Контакты */
?>

<?php get_header(); ?>

	<section class="contacts">
		<div class="container">

			<h2 class="contacts__title">Контакты</h2>

			<div class="contacts__wrap">
				<div class="contacts__info">
					<div class="contacts__info_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts__tel.png" alt="">
						<p><b>Телефон:</b></p>
						<p><?php the_field('phone', 'option'); ?></p>
						<p><a href="tel:<?php the_field('phone__url', 'option'); ?>">Позвонить нам</a></p>
					</div>
					<div class="contacts__info_block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts__mail.png" alt="">
						<p><b>Почта:</b></p>
						<p><?php the_field('email', 'option'); ?></p>
						<p><a href="mailto:<?php the_field('email', 'option'); ?>">Написать нам</a></p>
					</div>
				</div>
				<div class="contacts__soc">
					<a href="<?php the_field('telegram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.svg" alt="">
					</a>
					<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="">
					</a>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
					</a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
					</a>
				</div>
			</div>

		</div>
	</section>

	<section class="application--contacts application">
		<div class="application__container container">
			
			<div class="application--contacts__content application__content">
				<h2 class="application__title"><span>Оставьте заявку</span></h2>
				<div class="application__subtitle">
					наш менеджер свяжется с вами и предложит
					<br>условия от которых вы не сможете отказаться!
				</div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>

		</div>
	</section>

<?php get_footer(); ?>