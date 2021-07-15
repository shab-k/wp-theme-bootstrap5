<?php get_header(); ?>
<!-- Blog -->
<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pt-3 pb-4 mb-4 border-bottom">
                Posts
            </h3>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumb col-md-4">
                                    <?php the_post_thumbnail('full', array('class' => 'rounded-start img-fluid')); ?>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php if (is_single()) : ?>
                                            <?php the_title(); ?>
                                        <?php else : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        <?php endif; ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (is_single()) : ?>
                                            <?php the_content(); ?>
                                        <?php else : ?>
                                            <?php the_excerpt(); ?>
                                        <?php endif; ?>

                                        <?php if (is_single()) : ?>
                                            <?php comments_template(); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php the_time('F j, Y g:i a'); ?>
                                            by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <?php the_author(); ?>
                                            </a>
                                        </small>
                                        <a href="#" class="mt-0 pt-0 stretched-link">
                                            <p>Continue Reading</p>
                                        </a>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
            <!-- End of Card View -->
            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 3rem;">
                <div class="p-4 mt-3 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your
                        publication, writers, content, or something else entirely. Totally up to you.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>
<!-- Inja -->
