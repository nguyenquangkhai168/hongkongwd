<?php get_header(); ?>

<main class="main hk-single-blog hk-single-album">
    <section class="hk-single-blog__main hk-single-album__main">
        <div class="container">
            <div class="homepage__title text-center">
                <h1><?php the_title(); ?></h1>
                <div class="title-below">
                    <div class="icon-box">
                        <i class="fad fa-rings-wedding"></i>
                    </div>
                </div>
            </div>
            <div class="hk-single-blog__body border-0 p-0">
                <div class="single-post__breadcrumb p-0 border-0 d-flex flex-wrap algin-items-center justify-content-between">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p class="mb-0" id="breadcrumbs">','</p>' );
                        }
                    ?>
                    <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="share-fb d-inline-flex align-items-center">
                        <i class="fab fa-facebook me-1"></i> Chia sẻ
                    </a>
                </div>
                <div class="single-post__content single-album__content entry-content p-3">
                    <?php the_content(); ?>
                    <div id="macy-container">
                        <?php $images = get_field('album'); ?>
                        <?php foreach( $images as $image ): ?>
                        <div class="album">
                            <a data-fancybox="gallery" href="<?php echo esc_url($image); ?>">
                                <img src="<?php echo esc_url($image); ?>" alt="" class="album-image">
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="album-related hk-album__list p-3">
                    <h5>Album liên quan</h5>
                    <div class="owl-carousel" data-autoheight="true" data-desktop="3" data-desktop-small="3" data-tablet="2" data-mobile="1" data-nav="false" data-margintb="24" data-dots="false" data-loop="true" data-autoplay="true" data-speed="1000" data-autotime="4000">
                        <?php
                            $args = array(
                                'post_status'    => 'publish',
                                'post_type'      => 'album',
                                'posts_per_page' => 4,
                                'orderby'        => 'rand',
                                'order'          => 'ASC',
                                'post__not_in'   => array( get_the_ID() )
                            );
                            $getposts = new WP_Query( $args );
                        ?>
                        <?php while ( $getposts->have_posts() ) : $getposts->the_post(); ?>
                        <div class="album-item mb-0">
                            <a href="<?php the_permalink(); ?>" class="img-box d-block">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>