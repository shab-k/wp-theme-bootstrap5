<?php get_header(); ?>
<!-- Blog -->
<main class="container">
	<div class="row g-5">
		<div class="col-md-8">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="blog-post">
						<h2 class="blog-post-title">
							<?php the_title(); ?>
						</h2>

						<?php the_content(); ?>
					</div><!-- /.blog-post -->
				<?php endwhile; ?>
			<?php else : ?>
				<p><?php __('No Page Found'); ?></p>
			<?php endif; ?>

		</div>

		<div class="col-md-4">
			<div class="py-5 px-5 position-sticky" style="top: 2rem;">
				<div class="py-3 px-4 mb-3 mt-5 bg-light rounded">
					<h4 class="">About</h4>
					<p class="mb-0">Customize this section to tell your visitors a little bit about your
						publication, writers, content, or something else entirely. Totally up to you.</p>
				</div>
				<div class="col-md-4">
					<div class="position-sticky" style="top: 2rem;">
						<?php if (is_active_sidebar('sidebar')) : ?>
							<?php dynamic_sidebar('sidebar'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>