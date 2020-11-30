<?php get_header(); ?>

<div class="about-page">
    <!-- Page Banner -->
    <div class="page-banner">
        <div class="container">
            <h1 class="page-title lg-title">About Us</h1>
            <div class="bread-crumbs">
                <ul class="list-none d-flex justify-content-end">
                    <li class="xs-title"><a href="<?php echo site_url('/home') ?>" class="d-inline-block text-white">Home</a></li>
                    <span class="seperator px-2 text-white"> > </span>
                    <li class="xs-title active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Page Banner -->

    <!-- About Section -->
    <section class="about-section py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="img-holder text-right pl-3 position-relative">

                        <?php
                        $id_image = get_field('image1');
                        $image = wp_get_attachment_image_src($id_image, 'about');
                        ?>

                        <img src="assets/images/logo.png" data-src="<?php echo $image[0]; ?>" alt="">

                        <div class="img-two position-absolute box-shadow-2 bg-white p-3">
                            <?php
                            $id_image = get_field('image2');
                            $image = wp_get_attachment_image_src($id_image, 'about');
                            ?>

                            <img src="assets/images/logo.png" data-src="<?php echo $image[0]; ?>" alt="">
                        </div>
                        <div class="meta-info d-none">
                            <h2 class="d-flex justify-content-center align-items-center info ls-title button-pri-rounded">Since <br> 1920</h2>
                        </div>
                    </div>
                </div>
                <!-- Left Image -->


                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2 class="xs-title left-border text-uppercase d-inline-block text-dark">WHO WE ARE</h2>
                        <h3 class="lg-title mb-4 text-black"><?php echo the_field('about-title'); ?></h3>
                        <p><?php echo the_content(); ?></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Section -->
    <!-- Message from director -->
    <section class="mfb py-4 bg-light">
        <div class="container">
            <header class="section-header text-center mb-5">
                <h2 class="section-title font-weight-bold xs-title text-uppercase left-border d-inline-block">Message from board of director of</h2>
                <h3 class="lg-title text-black"><?php echo the_field('message-title'); ?></h3>
            </header>
            <div class="row">
                <div class="col-lg-4 col-12 mb-3">
                    <div class="holder p-3 bg-white">
                        <?php
                        $id_image = get_field('message-image');
                        $image = wp_get_attachment_image_src($id_image, 'about');
                        ?>

                        <img src="assets/images/logo.png" data-src="<?php echo $image[0]; ?>" alt="">

                    </div>
                </div>
                <div class="col-lg-8 col-12 mb-3">
                    <div class="holder p-3">
                        <p><?php echo the_field('message-content'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of message from director -->
    <!-- Testimonial Section -->
    <section class="testimonial-section bg-main py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <header class="section-header mb-0 text-center">
                        <h2 class="section-title text-white xs-title text-uppercase left-border d-inline-block">What They Are Saying</h2>
                        <h3 class="lg-title text-white mb-1">Clients Love</h3>
                    </header>
                    <div class="content text-white xs-title d-none">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quo sapiente repellat dicta laboriosam delectus distinctio ullam, voluptatum, quas ratione hic dolorum optio, at maiores excepturi nemo odit asperiores nostrum!</p>
                        <div class="row mb-4">
                            <div class="col-4">
                                <img src="assets/images/logo.png" data-src="assets/images/clients/logo_1.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/logo.png" data-src="assets/images/clients/logo_2.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/logo.png" data-src="assets/images/clients/logo_3.png" alt="">
                            </div>
                        </div>
                        <a href="contact.php" class="button-one-sec">Contact Now</a>
                    </div>
                </div>
                <!-- Left Side -->
                <div class="col-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <!-- slider Item -->
                        <div class="slider-item text-white">
                            <div class="client-img mb-3 text-center">
                                <img src="assets/images/logo.png" data-src="assets/images/testimonials/avatar-3.jpg" alt="">
                            </div>
                            <div class="qoute">
                                <img src="assets/images/logo.png" data-src="assets/images/testimonials/quote.png" alt="">
                            </div>
                            <div class="content xs-title mb-2 text-white text-center">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
                                <div class="client">
                                    <h2 class="ls-title text-sec text-capitalize">Thomas Muller</h2>
                                    <h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider Item -->
                        <div class="slider-item text-white">
                            <div class="client-img mb-3 text-center">
                                <img src="assets/images/logo.png" data-src="assets/images/testimonials/avatar-4.jpg" alt="">
                            </div>
                            <div class="qoute">
                                <img src="assets/images/logo.png" data-src="assets/images/testimonials/quote.png" alt="">
                            </div>
                            <div class="content xs-title mb-2 text-white text-center">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
                                <div class="client">
                                    <h2 class="ls-title text-sec text-capitalize">Lionela Messi</h2>
                                    <h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider Item -->
                        <div class="slider-item text-white">
                            <div class="client-img mb-3 text-center">
                                <img src="assets/images/logo.png" data-src="assets/images/testimonials/avatar-4.jpg" alt="">
                            </div>
                            <div class="qoute">
                                <img src="assets/images/logo.png" data-src="assets/images/testimonials/quote.png" alt="">
                            </div>
                            <div class="content xs-title mb-2 text-white text-center">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
                                <div class="client">
                                    <h2 class="ls-title text-sec text-capitalize">Lionela Messi</h2>
                                    <h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testimonial Section -->
    <!-- CTA-->
    <div class="cta text-center text-white">
        <div class="container">
            <h2 class="page-title lg-title">Provide you the highest quality work that meets your expectation.</h2>
            <p>Need a high quality business for your project?</p>
            <a href="contact.php" class="button-one-sec">Contact Now</a>
        </div>
    </div>
    <!-- End of CTA -->
</div>
<?php get_footer(); ?>