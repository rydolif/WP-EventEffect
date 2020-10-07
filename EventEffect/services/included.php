

<?php if( have_rows('included') ): ?>
	<section class="included">
		<div class="parallax parallax__border"></div>
		<div class="container">

			<h2 class="included__title">В стоимость Bubble Heads включено:</h2>

			<div class="included__list">

				<?php while( have_rows('included') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$text = get_sub_field('text');
					?>

					<div class="included__item">
						<div class="included__wrap">
							<img src="<?php echo $img; ?>" alt="">
							<h3 class="included__subtitle"><?php echo $title; ?></h3>
						</div>
						<p><?php echo $text; ?></p>
					</div>

				<?php endwhile; ?>

			</div>

		</div>
	</section>
<?php endif; ?>

