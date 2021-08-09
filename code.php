<?php wp_nav_menu( array(
    'theme_location'  => 'main-menu',	                		
    'menu_class'      => 'nav-item-area',	                		
) );?>

<?php
global $post;
$args = array( 'posts_per_page' => -1, 'post_type'=> 'Profile', 'orderby' => 'menu_order', 'order' => 'ASC' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<div class="single-intro">
    <div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>); " class="intro-img"></div>
</div>
<?php endforeach; wp_reset_query(); ?>

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