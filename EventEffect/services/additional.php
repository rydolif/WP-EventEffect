

<?php if( have_rows('additional') ): ?>

	<section class="additional">
		<div class="container">

			<h2 class="additional__title">Что заказывают с <?php the_title(); ?></h2>
			<h3 class="additional__subtitle">Дополнительные платные услуги</h3>

			<div class="additional__list">
				<?php while( have_rows('additional') ): the_row(); 
					$img = get_sub_field('img');
					$title = get_sub_field('title');
					?>

					<div class="additional__item">
						<img src="<?php echo $img; ?>" alt="">
						<p><b><?php echo $title; ?></b></p>
					</div>

				<?php endwhile; ?>
			</div>

		</div>
	</section>
<?php endif; ?>

