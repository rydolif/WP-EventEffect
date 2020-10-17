

<?php if( have_rows('work') ): ?>
	<section class="work">
		<div class="container">

			<h2 class="work__title"><?php the_field('work__title'); ?></h2>

			<div class="work__list">

			<?php while( have_rows('work') ): the_row(); 
				$img = get_sub_field('img');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
				?>

				<div class="work__item">
					<div class="work__img">
						<span></span>
						<img src="<?php echo $img; ?>" alt="">
					</div>
					<div class="work__content">
						<p><b><?php echo $title; ?></b></p>
						<p>
							<?php echo $text; ?>
						</p>
					</div>
				</div>
				
			<?php endwhile; ?>

			</div>

		</div>
	</section>
<?php endif; ?>


