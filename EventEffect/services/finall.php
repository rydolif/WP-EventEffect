

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