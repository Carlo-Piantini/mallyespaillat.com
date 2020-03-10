<?php get_header(); ?>

<!--body-->

	<section id="portfolio-section" class="main-section">
		<div class="type-effect"><h2 class="section-title">if you're looking <strong>for a sample.</strong></h2></div>
		<div class="section-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php $query = new WP_Query(array(
				'post_type' => 'portfolio',
				'posts_per_page' => -1,
			)); ?>

			<?php // columns for the portfolio feed // ?>
			<?php $portfolio_columns = array(); ?>

			<?php if ($query->have_posts()) : ?>
				<?php $row_count = 0; ?>
				<?php $post_count = 0; ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<?php $portfolio_columns[$row_count][$post_count]['post_title'] = get_the_title(); ?>
					<?php $portfolio_columns[$row_count][$post_count]['post_link'] = get_field('link'); ?>
					<?php $portfolio_columns[$row_count][$post_count]['post_thumbnail'] = get_field('thumbnail'); ?>
					<?php $portfolio_columns[$row_count][$post_count]['post_periodical'] = get_field('periodical'); ?>
					<?php $portfolio_columns[$row_count][$post_count]['post_copy'] = get_the_content(); ?>
					<?php $row_count++; ?>
					<?php if ($row_count > 2) : ?>
						<?php $row_count = 0; ?>
						<?php $post_count++; ?>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php endif; ?>

			<div id="portfolio-feed">
				<div class="portfolio-feed-column">
					<?php foreach($portfolio_columns[0] as $portfolio_post) : ?>
						<div class="portfolio-item">
							<a href="<?php echo $portfolio_post['post_link']; ?>" target="_blank"><img class="portfolio-item-img" src="<?php echo $portfolio_post['post_thumbnail']; ?>"></a>
							<div class="portfolio-item-content">
								<span class="portfolio-item-publisher"><?php echo $portfolio_post['post_periodical']; ?></span>
								<a class="portfolio-item-title" href="<?php echo $portfolio_post['post_link']; ?>" target="_blank"><?php echo $portfolio_post['post_title']; ?></a>
								<span class="portfolio-item-copy"><?php echo $portfolio_post['post_copy']; ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="portfolio-feed-column">
					<?php foreach($portfolio_columns[1] as $portfolio_post) : ?>
						<div class="portfolio-item">
							<a href="<?php echo $portfolio_post['post_link']; ?>" target="_blank"><img class="portfolio-item-img" src="<?php echo $portfolio_post['post_thumbnail']; ?>"></a>
							<div class="portfolio-item-content">
								<span class="portfolio-item-publisher"><?php echo $portfolio_post['post_periodical']; ?></span>
								<a class="portfolio-item-title" href="<?php echo $portfolio_post['post_link']; ?>" target="_blank"><?php echo $portfolio_post['post_title']; ?></a>
								<span class="portfolio-item-copy"><?php echo $portfolio_post['post_copy']; ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="portfolio-feed-column">
					<?php foreach($portfolio_columns[2] as $portfolio_post) : ?>
						<div class="portfolio-item">
							<a href="<?php echo $portfolio_post['post_link']; ?>" target="_blank"><img class="portfolio-item-img" src="<?php echo $portfolio_post['post_thumbnail']; ?>"></a>
							<div class="portfolio-item-content">
								<span class="portfolio-item-publisher"><?php echo $portfolio_post['post_periodical']; ?></span>
								<a class="portfolio-item-title" href="<?php echo $portfolio_post['post_link']; ?>" target="_blank"><?php echo $portfolio_post['post_title']; ?></a>
								<span class="portfolio-item-copy"><?php echo $portfolio_post['post_copy']; ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div><!--#portfolio-feed-->
		</div>
	</section><!--#about-section-->

	<?php get_footer(); ?>
</body>
