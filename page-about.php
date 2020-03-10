<?php get_header(); ?>

	<section id="about-section" class="main-section">
		<div class="type-effect"><h2 class="section-title">do you have a case of <strong>digital deja-vu?</strong></h2></div>
		<div class="section-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section><!--#about-section-->

	<?php get_footer(); ?>
</body>
