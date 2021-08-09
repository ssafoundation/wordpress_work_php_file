<!doctype html>
<html lang="en">

<head>
    <title>MONYR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php wp_head();?>
</head>

<body>
    <!-- navigation-area start -->
    <section class="navigation-area">
        <div class="container-fluid">
            <section class="navigation-padding-area">
                <div class="container">
                    <div class="navigation-wrap">
                        <div class="navigation-mobile-menu">
                            <div class="navbar-toggle">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                            <div class="nav-close-btn">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="nav-brand-area">
                            <nav class="navbar">
                                <a class="navbar-left-title" href="#"><span>MONYR</span>.INFO</a>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
            <?php wp_nav_menu( array(
                'theme_location'  => 'main-menu',	                		
                'menu_class'      => 'nav-item-area',	                		
            ) );?>
        </div>
    </section>
    <!-- navigation-area end -->
    <!-- hero-area start -->
    <section class="hero-area">
        <div class="container-fluid">
            <div class="hero-main-bg-left">
            <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'Profile', 'orderby' => 'menu_order', 'order' => 'ASC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                    <div class="single-intro">
                        <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>); " class="intro-img"></div>
                    </div>
            <?php endforeach; wp_reset_query(); ?>	
            </div>
            <section class="hero-padding-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 my-auto">
                            <div data-aos="fade-right" class="hero-about">
                                <h2>AKHTARUZZAMAN <span>MONYR</span></h2>
                                <p>Md. Akhtaruzzaman Monyr(Bengali: মনির; born October 08, 1997),i am a Bangladeshi freelancer & web developer.I have started Web Development 2018. I am working in the local and international marketplace.</p>
                                <div class="hero-about-btn">
                                    <a href="#">Hire Me</a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-right" class="offset-7"></div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- hero-area end -->
    <!-- about-area start -->
    <section class="about-area">
        <div class="container-fluid">
            <section class="about-padding-area">
                <div class="container">
                    <div class="about-full-wrap">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 my-auto mx-auto">
                                <div data-aos="fade-right" class="about-left">
                                    <div class="about-left-main-img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/about-logo.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div data-aos="fade-left" class="about-bio-right">
                                    <h3 class="my-bio-title">My Bio <span></span></h3>
                                    <p>I am Akhtaruzzaman Monyr, I consider myself a web designer & capable of implementing a web site from start to finish, using my own initiative, experience and resources and delivering better results.</p>
                                    <p>I am able to jump easily from being a designer to a coder, to software and hardware technician. This adaptability can also be seen in my work where I'm able to handle any task I'm given, be it web, design, multimedia,
                                        print, computer troubleshooting or networking.</p>
                                    <div class="about-right-social-area">
                                        <div class="about-social-title">
                                            <h4>Follow Me</h4>
                                        </div>
                                        <div class="social-item">
                                            <a href="https://www.facebook.com/monyr.info/" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="social-item">
                                            <a href="https://twitter.com/akhtar01727" class="social-link"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="social-item">
                                            <a href="https://www.linkedin.com/in/md-monyr-68a4a0194/" class="social-link"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a>
                                        </div>
                                        <div class="social-item">
                                            <a href="https://www.instagram.com/md.a.monyr/" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="social-item">
                                            <a href="https://www.behance.net/akhtarumonyr" class="social-link"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- about-area end -->
   <!-- portfolio-area start -->
   <section class="portfolio-area">
        <div class="container-fluid">
            <section data-aos="fade-up" class="portfolio-padding-area">
                <div class="container">
                    <div class="portfolio-full-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-title">
                                    <h3>My Recent Work</h3>
                                </div>
                            </div>
                        </div>
                        <div class="project-list-area">
                        <div class="row">
                            <?php
                                global $post;
                                $args = array( 'posts_per_page' => -6, 'post_type'=> 'portfolio', 'orderby' => 'menu_order', 'order' => 'ASC' );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ) : setup_postdata($post); ?>
                                
                                <!-- single service -->
                                <div class="col-sm-6 col-md-4">
                                    <div class="project-item">
                                        <div <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php the_post_thumbnail_url('medium');?>)" <?php endif;?> class="project-icon"></div>
                                        <div class="project-content">
                                       
                                            <h3><a href="<?php echo get_post_meta( $post->ID,'link', true)?>"><?php the_title()?></a></h3>
                                        </div>    
                                    </div>
                                </div>
                            <?php endforeach; wp_reset_query(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- portfolio-area end -->

  
    <!-- cients-testimonial-area start -->
    <section data-aos="fade-up" class="client-area">
        <div class="container-fluid">
            <section class="client-padding-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="client-title">
                                <h3>What Say My Client's</h3>
                            </div>
                        </div>
                    </div>
                    <div class="client-slider owl-carousel">
                        <?php
                            global $post;
                            $args = array( 'posts_per_page' => -6, 'post_type'=> 'client', 'orderby' => 'menu_order', 'order' => 'ASC' );
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) : setup_postdata($post); ?>
                            
                            <!-- single service -->
                        <div class="slider-items-width">
                            <div class="slider-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                        <p><?php the_content();?></p>
                                        <h4><?php the_title();?></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_query(); ?>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- cients-testimonial-area end -->
    <!--contect-area start -->
    <section data-aos="fade-up" class="contect-area">
        <div class="container-fluid">
            <section class="contect-padding-area">
                <div class="container">
                    <div class="contect-main-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contect-left">
                                    <h3>Lorem ipsum.</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum nesciunt laudantium deleniti totam dolor, placeat similique repellat, nemo reprehenderit quisquam quod hic? Saepe qui incidunt ex officia a libero sed.</p>
                                    <a href="" class="contect-btn">Contect Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contect-right">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/contect-logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- contect-area end -->
    <!-- blog-area start -->
    <section data-aos="fade-up" class="blog-area">
        <div class="container-fluid">
            <section class="blog-padding-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-title-area">
                                <h3>Chack Our Latest News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
						global $post;
						$args = array( 'posts_per_page' => -2, 'post_type'=> 'blog', 'orderby' => 'menu_order', 'order' => 'ASC' );
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post); ?>
						
						<!-- single service -->
                        <div class="col-md-6">
                            <div class="blog-item-left">
                                <div <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php the_post_thumbnail_url('large');?>)" <?php endif;?> class="blog-banner-area">
                                    <span><?php get_the_date( 'd F Y', $idd )?></span>
                                </div>
                                <div class="blog-content-area">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_content();?></p>
                                    <h3><a href="<?php echo get_post_meta( $post->ID,'link', true)?>"><?php the_title()?>Read More>></a></h3>
                                    
                                </div>
                                <div class="blog-fotter-area">
                                    <ul>
                                        <li><i class="fa fa-heart-o"></i>Like</li>
                                        <li><i class="fa fa-folder-o"></i>Finance</li>
                                        <li><i class="fa fa-comment-o"></i>Comment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					<?php endforeach; wp_reset_query(); ?>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- blog-area end -->
    <!-- fotter-contect-area end -->
    <section data-aos="fade-up" class="fotter-area">
        <div class="container-fluid">
            <section class="fotter-padding-area">
                <div class="container">
                    <div class="fotter-full-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="fotter-title">
                                    <h3>Contect with me</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="fotter-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d115790.69905166271!2d89.85149476669801!3d24.916417041801935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1569188008580!5m2!1sen!2sbd" width="600" height="450" frameborder="0"
                                        style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <?php dynamic_sidebar( 'contect' );?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="fotter-bottom-area">
        <div class="container-fluid">
            <section class="fotter-bottom-padding-area">
                <div class="container">
                    <div class="fotter-copyright-wrap">
                        <p>Monyr.Info 2019 &copy All ritght Reserved by <a href="#"><span>MONYR-themes</span></a></p>
                    </div>
                </div>
                <a href="#" class="fotter-bottom-btn"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></i></a>
            </section>

        </div>
    </section>
    <!-- fotter-contect-area end -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js,Bootstrap JS then main-js-->
    <!-- <script src="assets/js/isotope-v3.0.6.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script> -->
    <script>
        AOS.init({
            duration: 2000,
        });
    });
    </script>
    <?php wp_footer();?>
</body>

</html>