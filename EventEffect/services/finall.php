

<?php if( have_rows('finall') ): ?>
	<section class="finall">
		<div class="container">

			<h2 class="article__subtitle">Что получается в итоге</h2>

			<div class="slider-services">
				<div class="swiper-wrapper">

				<?php while( have_rows('finall') ): the_row(); 
					$img = get_sub_field('img');
					$iframe = get_sub_field('iframe');
					?>

					<a href="<?php echo $iframe; ?>" data-fancybox="gallery" class="swiper-slide" >
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