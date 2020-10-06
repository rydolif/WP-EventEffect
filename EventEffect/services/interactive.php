

<?php if( have_rows('interactive') ): ?>
	<section class="interactive">
		<div class="parallax parallax__circle"></div>
		<div class="interactive__container container">

			<h2 class="interactive__title">Для кого этот интерактив?</h2>

			<div class="interactive__list">

				<?php while( have_rows('interactive') ): the_row(); 
					$img = get_sub_field('img');
					$content = get_sub_field('content');
					?>

					<div class="interactive__item">
						<img src="<?php echo $img; ?>" class="interactive__img" alt="">
						<?php echo $content; ?>
					</div>

				<?php endwhile; ?>
			</div>

		</div>
	</section>
<?php endif; ?>
