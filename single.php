<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

if (have_posts()) :
	while (have_posts()) : the_post();

		if (get_the_post_thumbnail_url()) {
?>
			<div class="d-flex container-fluid" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
		<?php } else {
		?><div class="d-flex container-fluid" style="height:20vh;"></div>
		<?php } ?>

		<div class="container p-5 bg-light" style="margin-top:-100px">
			<div class="row">
				<div class="col-md-8">
					<div class="row text-center">
						<!-- Title and Data -->
						<div class="col-md-8">
							<h1 class="display-4 text-start"><?php the_title(); ?></h1>

							<?php if (!get_theme_mod("singlepost_disable_entry_meta")) : ?>
								<div class="post-meta text-start" id="single-post-meta">
									<p class="display-8 text-secondary">
										<span class="post-date"><?php the_date(); ?> </span>
										<span class="text-secondary post-author"> <?php _e('by', 'wp-theme-portfolio') ?> <?php the_author(); ?></span>
									</p>
									<div>

									</div>
									<div>
										<?php
										//Post Category
										if (!get_theme_mod("singlepost_disable_entry_cats") &&  has_category()) {
										?>
											<div class="entry-categories">
												<span class="screen-reader-text"><?php _e('Category: ', 'wp-theme-portfolio'); ?></span>
												<span class="entry-categories-inner">
													<?php the_category(' '); ?>
												</span>
											</div>
										<?php
										}

										?>
									</div>
								</div>
							<?php endif; ?>

						</div>

					</div>
					<div class="row">
						<div class="col-md-11">
							<?php

							the_content();

							if (get_theme_mod("enable_sharing_buttons")) wp_theme_portfolio_the_sharing_buttons();

							edit_post_link(__('Edit this post', 'wp-theme-portfolio'), '<p class="text-right fw-bold">', '</p>');

							// If comments are open or we have at least one comment, load up the comment template.
							if (!get_theme_mod("singlepost_disable_comments")) if (comments_open() || get_comments_number()) {
								comments_template();
							}

							?>

						</div>

					</div>

				</div>
				<div class="col-md-4">
					<div class="py-5 px-5 position-sticky" style="top: 2rem;">
						<div class="py-3 px-4 mb-3 mt-5 bg-light rounded">
							<h4 class="">About</h4>
							<p class="mb-0">Customize this section to tell your visitors a little bit about your
								publication, writers, content, or something else entirely. Totally up to you.</p>
						</div>
						<?php if (is_active_sidebar('sidebar')) : ?>
							<?php dynamic_sidebar('sidebar'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

<?php
	endwhile;
else :
	_e('Sorry, no posts matched your criteria.', 'wp-theme-portfolio');
endif;
?>


<?php get_footer(); ?>