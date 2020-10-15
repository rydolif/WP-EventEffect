

<?php if( have_rows('question') ): ?>
	<section class="question">
		<div class="container">

			<h2 class="question__title">Часто задаваемые вопросы</h2>

			<?php while( have_rows('question') ): the_row(); 
				$title = get_sub_field('title');
				$text = get_sub_field('text');
				?>

				<div class="question__block block">
					<div class="question__header block__header">
						<span></span>
						<p><b><?php echo $title; ?></b></p>
					</div>
					<div class="question__content block__content">
						<p>
							<?php echo $text; ?>
						</p>
					</div>
				</div>

			<?php endwhile; ?>
			
		</div>
	</section>
<?php endif; ?>


