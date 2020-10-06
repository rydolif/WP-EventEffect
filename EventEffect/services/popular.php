
<?php if( have_rows('popular') ): ?>
	<section class="popular">
		<div class="container">

			<h2 class="popular__title"><span>Популярные</span> интерактивы</h2>

			<div class="popular__list">

				<?php while( have_rows('popular') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					$link = get_sub_field('link');
					?>

					<a href="<?php echo $link; ?>" class="popular__item">
						<span><?php echo $title; ?></span>
						<img src="<?php echo $img; ?>" alt="">
					</a>

				<?php endwhile; ?>
			
			</div>

		</div>
	</section>
<?php endif; ?>