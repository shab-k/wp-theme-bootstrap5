<?php get_header(); ?>

<!-- main image & intro text -->
<section class="intro" id="intro">
    <div class="container-lg">
        <div class="row g-4 justify-content-center align-items-center">

            <div class="col-md-5 text-center text-md-start">
                <h1>
                    <div class="display-2">
                        <?php echo get_theme_mod('intro_heading', 'Black-Belt test!'); ?>
                    </div>
                    <div class="display-5 text-muted">
                        <?php echo get_theme_mod('intro_sub_heading', 'Your coaching skills test!'); ?>
                    </div>
                </h1>
                <p class="lead my-4 text-muted"><?php echo get_theme_mod('intro_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
                <a href="#pricing" class="btn btn-secondary btn-lg"><?php echo get_theme_mod('btn_text', 'Buy Niw'); ?></a>
            </div>
            <div class="col-md-5 text-center d-none d-md-block">
                <!-- tooltip -->
                <span class="tt" data-bs-placement="bottom" title="Tooltip!">
                    <img src="<?php echo get_theme_mod('intro_image', get_bloginfo('template_url') . '/images/undraw_Data_trends_re_2cdy.svg'); ?>" class="img-fluid" alt="ebook">

                </span>
            </div>
        </div>
    </div>
</section>

<!-- pricing plans -->
<section id="pricing" class="bg-light mt-5">
    <div class="container-lg">
        <div class="text-center">
            <h2>Pricing Plans</h2>
            <p class="lead text-muted">Choose a pricing plan that suits you:</p>
        </div>

        <div class="row my-5 g-0 align-items-center justify-content-center">
            <div class="col-8 col-lg-4 col-xl-3">
                <?php if (is_active_sidebar('card1')) : ?>
                    <?php dynamic_sidebar('card1'); ?>
                <?php endif; ?>
            </div>

            <div class="col-9 col-lg-4">
                <?php if (is_active_sidebar('card2')) : ?>
                    <?php dynamic_sidebar('card2'); ?>
                <?php endif; ?>
            </div>

            <div class="col-8 col-lg-4 col-xl-3">
                <?php if (is_active_sidebar('card3')) : ?>
                    <?php dynamic_sidebar('card3'); ?>
                <?php endif; ?>
            </div>
        </div>

    </div><!-- end container -->
</section>

<!-- topics at a glance -->
<section id="topics">
    <div class="container-md">
        <div class="text-center">
            <h2>Inside the Package...</h2>
            <p class="lead text-muted">A quick glance at the topics you'll learn</p>
        </div>
        <div class="row my-5 g-5 justify-content-around align-items-center">
            <div class="col-6 col-lg-4">
                <img src="<?php bloginfo('template_url'); ?>/images/undraw_develop_app_re_bi4i.svg" class="img-fluid" alt="ebook">
            </div>
            <div class="col-lg-6">

                <!-- accordion -->
                <div class="accordion" id="chapters">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#starter-pack" aria-expanded="true" aria-controls="starter-pack">
                                Starter Package
                            </button>
                        </h2>
                        <div id="starter-pack" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#complete-pack" aria-expanded="false" aria-controls="complete-pack">
                                Complete Package
                            </button>
                        </h2>
                        <div id="complete-pack" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ultimate-pack" aria-expanded="false" aria-controls="ultimate-pack">
                                Ultimate Package
                            </button>
                        </h2>
                        <div id="ultimate-pack" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- reviews list -->
<section id="reviews" class="bg-altlight">
    <div class="container-lg">
        <div class="text-center">
            <h2><i class="bi bi-stars dark-color"></i>Customer Reviews</h2>
            <p class="lead">What our customers have said about the training packs...</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-8">
                <div class="list-group">

                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring coaching</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error
                            veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio
                            commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-fill dark-color"></i>
                            <i class="bi bi-star-half dark-color"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring coaching</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error
                            veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio
                            commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact form -->
<!-- form-control, form-label, form-select, input-group, input-group-text -->
<section id="contact">
    <div class="container-lg">

        <div class="text-center">
            <h2>Get in Touch</h2>
            <p class="lead">Questions to ask? Fill out the form to contact me directly...</p>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">

                <form>
                    <label for="email" class="form-label">Email address:</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text">
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </span>
                        <input type="text" id="email" class="form-control" placeholder="e.g. john.doe@example.com" />
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Please enter a valid email address">
                                <i class="bi bi-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>
                    <label for="name" class="form-label">Name:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill text-secondary"></i>
                        </span>
                        <input type="text" id="name" class="form-control" placeholder="e.g. John Doe" />
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Please enter full name">
                                <i class="bi bi-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>
                    <label for="subject" class="form-label">What is your question about?</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-chat-right-dots-fill text-secondary"></i>
                        </span>
                        <select class="form-select" id="subject">
                            <option value="pricing" selected>Pricing query</option>
                            <option value="content">Content query</option>
                            <option value="other">Other query</option>
                        </select>
                    </div>
                    <div class="mb-4 mt-5 form-floating">
                        <textarea class="form-control" id="query" style="height: 140px" placeholder="query"></textarea>
                        <label for="query">Your query...</label>
                    </div>
                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- get updates / modal trigger -->
<section class="light-bg">
    <div class="container">
        <div class="text-center text-light">
            <h2>Stay in The Loop</h2>
            <p class="lead">Get the latest updates as they happen...</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center text-light">
                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn btn-primary-outline" data-bs-toggle="modal" data-bs-target="#reg-modal">
                    Register for Updates
                </button>
            </div>
        </div>
    </div>
</section>

<!-- modal itself -->
<div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Get the Latest Updates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Quis, exercitationem laboriosam nihil</p>
                <label for="modal-email" class="form-label">Your email address:</label>
                <input type="text" class="form-control" id="modal-email" placeholder="e.g. mario@example.com">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>