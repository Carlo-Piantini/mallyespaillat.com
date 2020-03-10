<?php get_header(); ?>
<!--body-->

	<section id="blog-section" class="main-section">
		<div class="type-effect"><h2 class="section-title">a space of <strong>our own</strong></h2></div>

		<?php // commenting out until the blog post is ready // ?>
		<?php if (have_rows('blog_centerpiece', 'option')) : ?>
			<?php while (have_rows('blog_centerpiece', 'option')) : the_row(); ?>
				<div id="blog-centerpiece">
					<div id="blog-headline">
			      <?php $headline_post = get_sub_field('headline'); ?>
			      <?php if ($headline_post) : ?>
			        <?php $post = $headline_post; ?>
			        <?php setup_postdata($post); ?>
							<?php $headline_thumb = get_the_post_thumbnail_url(); ?>
							<div id="headline-thumbnail" style="background-image:url(<?php echo $headline_thumb; ?>);">
								<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></a>
							</div><!--#headline-thumbnail-->
							<div id="headline-content">
								<span id="headline-author"><?php the_author(); ?> | <?php the_date(); ?></span>
								<a id="headline-link" href="<?php the_permalink(); ?>"><h2 id="headline-title"><?php the_title(); ?></h2></a><!--#headline-link-->
				        <span id="headline-excerpt"><?php the_excerpt(); ?></span>
							</div><!--#headline-content-->
			        <?php wp_reset_postdata(); ?>
			      <?php endif; ?>
			    </div><!--#blog-headline-->
					<?php /* if (have_rows('shout_outs')) : ?>
						<div id="blog-shout-outs">
			        <?php while (have_rows('shout_outs')) : the_row(); ?>
			          <div class="blog-shout-out">
			            <?php $shout_out_post = get_sub_field('shout_out'); ?>
			            <?php if ($shout_out_post) : ?>
			              <?php $post = $shout_out_post; ?>
			              <?php setup_postdata($post); ?>
											<span class="shout-out-author"><?php the_author(); ?> | <?php the_date(); ?></span>
											<a class="shout-out-link" href="<?php the_permalink(); ?>"><h4 class="shout-out-title"><?php the_title(); ?></h4></a>
											<span class="shout-out-excerpt"><?php the_excerpt(); ?></span>
			              </a><!--.shout-out-link-->
			              <?php wp_reset_postdata(); ?>
			            <?php endif; ?>
			          </div><!--.blog-shout-out-->
			        <?php endwhile; ?>
			      </div><!--#blog-shout-outs-->
		      <?php endif; */ ?>
				</div><!--#blog-centerpiece-->
			<?php endwhile; ?>
		<?php endif; ?>

		<?php /* <div id="blog-feed" class="section-content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="feed-item">
							<?php if (has_post_thumbnail()) : ?>
								<a class="feed-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<?php endif; ?>
							<div class="feed-item-content">
								<span class="feed-item-author"><?php the_author(); ?> | <?php the_date(); ?></span><!--.feed-date-->
								<a class="feed-item-link" href="<?php the_permalink(); ?>"><h4 class="feed-item-title"><?php the_title(); ?></h4><!--.feed-title--></a>
								<span class="feed-item-excerpt"><?php the_excerpt(); ?></span><!--.feed-excerpt-->
							</div><!--.feed-item-content-->
					</div><!--.feed-item-->
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!--#blog-feed.section-content--> */ ?>
	</section><!--#blog-section-->

	<?php get_footer(); ?>
</body>
