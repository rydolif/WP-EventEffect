
	<header class="header">
		<div class="header__container">

			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__logo.svg" alt="logo">
				<p>Лучшие интерактивные <br>развлечения на мероприятия <br>любого формата</p>
			</a>

			<div class="header__soc">
				<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
				</a>
				<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
				</a>
			</div>

			<nav class="header__nav">
				<?php 
					wp_nav_menu( array(
					'menu'=>'header__menu',
					'theme_location'=>'header__menu',
					) );
				?>
				<div class="header__nav_mobile header__soc">
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
					</a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
					</a>
				</div>
				<div class="header__nav_mobile header__messenger">
					<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt="">
					</a>
				</div>
				<div class="header__info_mobile header__info">
					<p class="header__info_clock"><?php the_field('time', 'option'); ?></p>
					<p>
						<a href="tel:<?php the_field('phone__url', 'option'); ?>" class="header__info_tel">
							<?php the_field('phone', 'option'); ?>
						</a>
					</p>
					<p>
						<a href="mailto:<?php the_field('email', 'option'); ?>" class="header__info_mail">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="">
							<span><?php the_field('email', 'option'); ?></span>
						</a>
					</p>
				</div>
			</nav>

			<div class="header__messenger">
				<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt="">
				</a>
			</div>

			<div class="header__wrap">
				<div class="header__info">
					<p class="header__info_clock"><?php the_field('time', 'option'); ?></p>
					<p><a href="tel:89622132229" class="header__info_tel">8 962 213 22 29</a></p>
					<p>
						<a href="mailto:<?php the_field('email', 'option'); ?>" class="header__info_mail">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="">
							<span><?php the_field('email', 'option'); ?></span>
						</a>
					</p>
				</div>
	
				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>
			</div>

		</div>
	</header>

	<main class="main">
