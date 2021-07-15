<?php get_header(); ?>
<!-- Blog -->
<main class="container">
	<div class="row g-5">
		<div class="col-md-8">
			<h1 class="pb-4 pt-4 mb-4 border-bottom">
				Posts
			</h1>

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<article class="blog-post">
						<h2 class="blog-post-title">
							<?php if (is_single()) : ?>
								<?php the_title(); ?>
							<?php else : ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							<?php endif; ?>
						</h2>
						<p class="blog-post-meta">
							<?php the_time('F j, Y g:i a'); ?>
							by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
								<?php the_author(); ?>
							</a>
						</p>

						<?php if (get_the_post_thumbnail_url()) { ?>
							<div class="d-flex container-fluid mb-3" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
						<?php } else { ?>
							<div class="d-flex container-fluid mb-3" style="height:20vh;"></div>
						<?php } ?>

						<?php if (is_single()) : ?>
							<?php the_content(); ?>
						<?php else : ?>
							<?php the_excerpt(); ?>
						<?php endif; ?>

						<?php if (is_single()) : ?>
							<?php the_title(); ?>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="mt-0 pt-0 stretched-link">
								<p>Continue Reading</p>
							</a>
						<?php endif; ?>

						<?php if (is_single()) : ?>
							<?php comments_template(); ?>
						<?php endif; ?>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('No Posts Found'); ?></p>
			<?php endif; ?>
			<nav class="blog-pagination" aria-label="Pagination">
				<a class="btn btn-outline-primary" href="#">Older</a>
				<a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
			</nav>

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

</main>


<?php get_footer(); ?>