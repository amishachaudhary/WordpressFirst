<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="site-wrapper">
        <header class="site-header">
            <div class="header-t py-2 bg-main">
                <div class="container">
                    <div class="row flex-wrap-reverse align-items-center">
                        <div class="col-8">
                            <div class="wrapper d-flex flex-wrap">
                                <!-- Col -->
                                <div class="cols mr-md-4 mr-3">
                                    <h2 class="xs-title text-white mb-0"><i class="fas fa-map-marker-alt mr-2"></i>Tinkune, Kathmandu</h2>
                                </div>
                                <div class="cols mr-md-4 mr-3">
                                    <a href="#" class="xs-title text-white mb-0"><i class="fas fa-phone-alt mr-2"></i>+977 985-1044110</a>
                                </div>
                                <div class="cols mr-md-4 mr-3">
                                    <a href="mailto: " class="xs-title text-white mb-0"><i class="far fa-envelope mr-2"></i>mount2076@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Left -->
                        <div class="col-4 mb-md-0 mb-3">
                            <div class="wrapper d-flex social-links justify-content-end">
                                <div class="cols mr-2 d-flex">
                                    <h2 class="xs-title text-white mb-0 mr-3 d-lg-block d-none">Follow Us On</h2>
                                    <ul class="list-none d-flex">
                                        <li class="mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="mr-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Right -->
                    </div>
                </div>
            </div>
            <!-- End of Header-Top -->
            <div class="header-b box-shadow-1">
                <div class="container">
                    <nav class="navbar navbar-expand-xl navbar-light py-0">
                        <div class="wrapper d-flex align-items-center">
                            <!-- Brand -->

                            <!-- for dynamic image in wordpress -->

                            <?php
                            if (has_custom_logo() || is_customize_preview()) {
                                the_custom_logo();
                            } else { ?>


                                <a class="navbar-brand" href="index.php">
                                    <img src=" <?php echo get_template_directory_uri() ?> /assets/images/logo.png" alt=""></a>
                            <?php } ?>

                            <!-- dynamic image close -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <!-- Navigation -->
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <nav class="main-navigaiton">
                                <ul class="navbar-nav font-w-semi">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo site_url('/home') ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('/about'); ?>">About Us</a>
                                    </li>
                                    <!-- Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('/services'); ?>" id="navbardrop" data-toggle="dropdown">
                                            Our Services
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="service-list.php">All</a>
                                            <a class="dropdown-item" href="service-detail.php">Turf Import</a>
                                            <a class="dropdown-item" href="service-detail.php">Granules production & sales</a>
                                            <a class="dropdown-item" href="service-detail.php">All sports floor construction</a>
                                            <a class="dropdown-item" href="service-detail.php">Hybrid grass import and installation </a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('/projects'); ?>">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End of Header-Bottom -->
        </header>
        <!-- End of Site Header -->