<?php /*
Template Name: Services Page
*/ ?>

<!--body-->
	<?php get_header(); ?>

	<section id="services-section" class="main-section">
		<div class="type-effect"><h2 class="section-title">before we <strong> get started,</strong></h2></div>
		<div class="section-content flex">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!--.section-content-->
	</section><!--#about-section-->

	<?php get_footer(); ?>
</body>
