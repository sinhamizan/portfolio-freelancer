<?php

/** 
 * Template Name: Home
 * 
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizanur Rahaman</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>


<body>

    <button class="go-top" id="go_top">Top</button>
    
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <header class="header__area">
                <div class="container">
                    <div class="header__inner">
                        <div class="header__logo">
                            <a href="/">
                              <?php the_custom_logo(); ?>
                            </a>
                        </div>

                        <div class="header__menu main-menu">
                            <ul>
                                <li><a href="#top">Home</a></li>
                                <li><a href="#about">about</a></li>
                                <li><a href="#services">services</a></li>
                                <li><a href="#portfolio">portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="header__contact">
                            <a href="https://www.upwork.com/freelancers/~012f16183b1f216cd9" target='_blank'>hire me</a>
                        </div>

                        <div class="dropdown header__nav main-menu">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/menu.png" alt="">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#top">Home</a></li>
                                <li><a href="#about">about</a></li>
                                <li><a href="#services">services</a></li>
                                <li><a href="#portfolio">portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <main>

                <section class="hero__area pt-5" id="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="hero__left">
                                    <h1>hello, I'm <strong>Mizanur Rahaman.</strong> </h1>
                                    <p>Web designer and WordPress theme developer working for envato.com in Dhaka, Bangladesh.</p>
                                    <ul class="address">
                                        <li><a href="mailto:mizan88developer@gmail.com"><span><i class="fa-regular fa-envelope"></i></span> mizan88developer@gmail.com</a></li>
                                        <li><a href="tel:+8801738863188"><span><i class="fa-solid fa-phone"></i></span> +880 1738863188</a></li>
                                        <li><span><i class="fa-solid fa-location-dot"></i></span> Dhaka, Bangladesh</li>
                                    </ul>

                                    <ul class="contact">
                                        <li><a class="cxu-btn" href="https://www.upwork.com/freelancers/~012f16183b1f216cd9" target='_blank'>hire on upwork</a></li>
                                        <li><a class="cxu-btn" href="<?php echo get_template_directory_uri(); ?>/assets/resume.pdf" download>download CV</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="hero__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/mizan.png" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="fun__area pt-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="fun__item">
                                    <h3 class="number">05+</h3>
                                    <p>years of <br> Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="fun__item">
                                    <h3 class="number">50+</h3>
                                    <p>projects <br> complated</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="fun__item">
                                    <h3 class="number">10+</h3>
                                    <p>countries <br> worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="about__area pb-120 pt-120" id="about">
                    <div class="container">
                        <div class="about__inner">
                            <div class="about__content">
                                <h2 class="sec-title">About Me</h2>
                                <p>Hi, my name is <span>Mizanur Rahaman</span> and experience Frontend and WordPress theme developer.
                                    spent most of my waking hours for the last five years designing, programming and operating WordPress
                                    sites go beyond with exclusive designer.</p>
                                <ul>
                                  <li>Name <span>:</span> <strong>Mizanur Rahaman</strong></li>
                                  <li>Nationality <span>:</span> <strong>Bangladeshi</strong></li>
                                  <li>Phone <span>:</span> <strong>+880 1738863188</strong></li>
                                  <li>Email <span>:</span> <strong>mizan88developer@gmail.com</strong></li>
                                  <li>Experience <span>:</span> <strong>5+ years</strong></li>
                                  <li>Freelance <span>:</span> <strong>Available</strong></li>
                                  <li>Skype <span>:</span> <strong>mizankpi75</strong></li>
                                  <li>Languages <span>:</span> <strong>Bengali, English</strong></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </section>


                <section class="education__area pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="sec-title">My Experience</h2>
                                <div class="educaton__list">
                                    <div class="education__item">
                                        <p>2020-Continue</p>
                                        <h3>Full Stack Web Developer</h3>
                                        <h4>Wealcoder</h4>
                                    </div>
                                    <div class="education__item">
                                        <p>2019-2020</p>
                                        <h3>Web Designer</h3>
                                        <h4>Wealcoder</h4>
                                    </div>
                                    <div class="education__item">
                                        <p>2018-2019</p>
                                        <h3>Inernship</h3>
                                        <h4>E-futureBD</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 edu-mt">
                                <h2 class="sec-title">my education</h2>
                                <div class="educaton__list">
                                    <div class="education__item">
                                        <p>2016-2020</p>
                                        <h3>B.Sc in Computer Science</h3>
                                        <h4>Bangladesh University of Business and Technolotg BUBT</h4>
                                    </div>
                                    <div class="education__item">
                                        <p>2011-2015</p>
                                        <h3>Diploma in Computer Technology</h3>
                                        <h4>Kushtia Polytechnic Institute</h4>
                                    </div>
                                    <div class="education__item">
                                        <p>2001-2011</p>
                                        <h3>School Certificate</h3>
                                        <h4>Nowpara DMD Madrasha</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="skill__area pb-120">
                    <div class="container">
                        <div class="skill__inner">
                            <h2 class="sec-title">My Skils</h2>
                            <div class="skill__list">
                                <?php
                                    if( have_rows('skill_item') ):
                                        while( have_rows('skill_item') ) : the_row();
                                            $skill_title = get_sub_field('skill_title');
                                            $skill_label = get_sub_field('skill_label');
                                            ?>
                                            <div class="skill_item">
                                                <h3><?php echo $skill_title; ?></h3>
                                                <p><?php echo $skill_label ?></p>
                                            </div>
                                            <?php
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="service__area pb-120" id="services">
                    <div class="container">
                        <h2 class="sec-title">My service</h2>
                        <div class="service__list">
                            <?php
                                $service_serial = 1;
                                if( have_rows('service_item') ):
                                    while( have_rows('service_item') ) : the_row();
                                        $service_title = get_sub_field('service_title');
                                        $service_description = get_sub_field('service_description');
                                        ?>
                                        <div class="service__item">
                                            <div class="serial">
                                                <p>0<?php echo $service_serial; ?>.</p>
                                            </div>
                                            <div class="service__title">
                                                <h3><?php echo $service_title; ?></h3>
                                            </div>
                                            <div class="text">
                                                <p><?php echo $service_description; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        $service_serial++;
                                    endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                </section>


                <section class="portfolio__area pb-120" id="portfolio">
                    <div class="container">
                        <div class="portfolio__inner">
                            <h2 class="sec-title">Recent projects</h2>

                            <div class="portfolio__btn">
                                <button data-filter="all">All</button>
                                <button data-filter=".frontend">Frontend</button>
                                <button data-filter=".wptheme">WordPress Theme</button>
                                <button data-filter=".shopify">shopify</button>
                            </div>

                            <div class="portfolio__list">

                                <?php
                                    if( have_rows('portfolio_item') ):
                                        while( have_rows('portfolio_item') ) : the_row();
                                            $portfolio_thumb = get_sub_field('portfolio_thumbnail');
                                            $portfolio_title = get_sub_field('portfolio_title');
                                            $portfolio_url = get_sub_field('portfolio_url');
                                            $portfolio_category = get_sub_field('portfolio_category');
                                            print_r ($portfolio_category);
                                            ?>
                                            <div class="portfolio__item mix <?php echo $portfolio_category; ?>">
                                                <a href="<?php echo $portfolio_url; ?>" target="_blank">
                                                    <img src="<?php echo $portfolio_thumb; ?>" alt="Thumbnail">
                                                    <div class="info">
                                                        <h3><?php echo $portfolio_title; ?></h3>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="testimonial__area pb-120">
                    <div class="container">
                        <div class="testimonial__inner">
                            <h2 class="sec-title">Client's Feedback</h2>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="testimonial__quote">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="swiper testimonial__slider">
                                        <div class="swiper-wrapper">
                                            <?php
                                                if( have_rows('testimonial_item') ):
                                                    while( have_rows('testimonial_item') ) : the_row();
                                                        $client_fb = get_sub_field('client_feedback');
                                                        $client_name = get_sub_field('client_name');
                                                        $fb_place = get_sub_field('feedback_place');
                                                        ?>
                                                        <div class="swiper-slide">
                                                            <div class="testimonial__slide">
                                                                <p><?php echo $client_fb; ?></p>
                                                                <h3><?php echo $client_name; ?></h3>
                                                                <h4><?php echo $fb_place; ?></h4>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    endwhile;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="contact__area pb-120" id="contact">
                    <div class="container">
                        <h2 class="sec-title">Contact Form</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="contact__form">
                                    <form action="">
                                        <div class="cols-2">
                                            <input type="text" name="firstName" placeholder="First Name">
                                            <input type="text" name="lastName" placeholder="Last Name">
                                        </div>
                                        <div class="cols-2">
                                            <input type="email" name="email" placeholder="Email">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 contact-mt">
                                <div class="contact__right">
                                    <p>for any type of project let's talk.</p>
                                    <a class="cxu-btn" href="">Hire Me on Upwork</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </main>


            <footer class="footer__area">
                <div class="container">
                    <div class="footer__inner">
                        <div class="footer__top">
                            <div class="item">
                                <p>Phone</p>
                                <a href="tel:+8801738863188">+880 1738863188</a>
                            </div>
                            <div class="item">
                                <p>skype</p>
                                <a href="tel:+8801738863188">mizankpi75</a>
                            </div>
                            <div class="item">
                                <p>Emial</p>
                                <a href="mailto:mizan88developer@gmail.com">mizan88developer@gmail.com</a>
                            </div>
                            <div class="item">
                                <p>address</p>
                                <li>Dhaka, Bangladesh.</li>
                            </div>
                            <div class="item">
                                <p>Get in touch</p>
                                <ul>
                                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="footer__copyright">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/SplitText.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollSmoother.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollToPlugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mixitup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


</body>
</html>