<?php get_header(); ?>
<!-- Blog -->
<main class="container">
	<div class="row g-5">
		<div class="col-md-8">
			<?php if (have_posts()) : ?>
				<h2 class="blog-post-title">
					<?php the_archive_title(); ?>
				</h2>
				<h2 class="blog-post-title">
					<?php the_archive_description(); ?>
				</h2>
				<?php while (have_posts()) : the_post(); ?>
					<article class="blog-post">
						<?php if (get_the_post_thumbnail_url()) { ?>
							<div class="d-flex container-fluid mb-3" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
						<?php } else { ?>
							<div class="d-flex container-fluid mb-3" style="height:20vh;"></div>
						<?php } ?>
						<?php get_template_part('template-parts/content', get_post_type()); ?>
					</article>

				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<p> <?php get_template_part('template-parts/content', 'none'); ?></p>
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