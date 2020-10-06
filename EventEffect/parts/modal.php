
	<div class="modal modal--order">
		<div action="sendmail.php" class="modal__form form" method="post">

			<button class="modal__close" type="button">
				<span></span>
				<span></span>
			</button>

			<h2 class="modal__title">Получить скидку</h2>

			<?php echo do_shortcode('[caldera_form id="CF5f7c9d7a646f7"]') ?>

		</div>
	</div>

	<div class="modal modal--thanks">
		<div class="modal__form">
			<button class="modal__close thanks_close" type="button">
				<span></span>
				<span></span>
			</button>
			<h2 class="modal__title">Спасибо за Вашу заявку</h2>
			<p class="modal__subtitle">Менеджер свяжется с вами в ближайшее время</p>
			<div class="modal__soc">
				<p class="modal__subtitle">Следите за новостями </p>
				<div class="footer__soc header__soc">
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt=""></a>
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt=""></a>
				</div>
			</div>
		</div>

	</div>