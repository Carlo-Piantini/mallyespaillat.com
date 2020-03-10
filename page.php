<?php get_header(); ?>

	<section class="main-section">
		<div class="type-effect"><h2 class="section-title"><?php the_title(); ?></h2></div>
		<div class="section-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section><!--.main-section-->

<?php get_footer(); ?>