
	</main>

	<footer class="footer">
		<div class="footer__container">

			<a href="<?php echo get_home_url(); ?>" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__logo.svg" alt="logo">
				<p>Лучшие интерактивные <br>развлечения на мероприятия <br>любого формата</p>
			</a>

			<div class="footer__soc header__soc">
				<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
				</a>
				<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
				</a>
			</div>

			<nav class="footer__nav">
				<?php 
					wp_nav_menu( array(
					'menu'=>'footer__menu',
					'theme_location'=>'footer__menu',
					) );
				?>
			</nav>

			<div class="footer__messenger">
				<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-whatsapp.png" alt="">
				</a>
			</div>

			<div class="footer__info">
				<p class="header__info_clock"><?php the_field('time', 'option'); ?></p>
				<p>
					<a href="tel:<?php the_field('phone__url', 'option'); ?>" class="footer__info_tel">
						<?php the_field('phone', 'option'); ?>
					</a>
				</p>
				<p>
					<a href="mailto:<?php the_field('email', 'option'); ?>" class="footer__info_mail">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="">
						<span><?php the_field('email', 'option'); ?></span>
					</a>
				</p>
			</div>

		</div>
		<div class="footer__copy">
			<p>© Event-Effect. 2020</p>
			<p><a href="<?php the_field('police', 'option'); ?>" target="_blank">Политика конфединциальности</a></p>
		</div>
	</footer>