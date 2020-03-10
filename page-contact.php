<?php /*
Template Name: Contact Page
*/ ?>

<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<?php get_header(); ?>
<!--body-->

	<section id="contact-section" class="main-section">
		<div class="type-effect"><h2 class="section-title">contact <strong>me</strong>.</h2></div>
		<div class="section-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php $args = array(
						'submit_text' => 'talk to me',
						'redirect' => 'https://www.mallyespaillat.com/contact/thank-you',
					); ?>
					<?php advanced_form('form_5d9b640e8bff5', $args); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section><!--#about-section-->

	<?php get_footer(); ?>
</body>
