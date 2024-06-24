<?php get_header(); ?>

<main class="main hk-single-blog">
    <section class="hk-single-blog__main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="hk-single-blog__body">
                        <div class="single-post__breadcrumb">
                            <?php
                                if ( function_exists('yoast_breadcrumb') ) {
                                    yoast_breadcrumb( '<p class="mb-0" id="breadcrumbs">','</p>' );
                                }
                            ?>
                        </div>
                        <div class="single-post__title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="single-post__meta">
                            <div class="date d-flex align-items-center">
                                <i class="fal fa-calendar-alt me-1"></i>
                                <?php echo get_the_date( 'd/m/Y' ); ?>
                            </div>
                        </div>
                        <div class="single-post__content entry-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="single-post__footer d-flex align-items-center justify-content-between">
                            <?php $categories = get_the_category(); ?>
                            <p class="mb-0 cat-list">Danh mục:
                                <?php foreach( $categories as $category ) : ?>
                                    <a href="#"><?php echo $category->cat_name; ?></a>
                                <?php endforeach; ?>
                            </p>
                            <p class="mb-0">
                                <a target="_blank" rel="noopener noreferrer nofollow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="share-fb d-inline-flex align-items-center">
                                <i class="fab fa-facebook me-1"></i> Chia sẻ
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="hk-single-blog__related">
                        <h5>Bài viết liên quan</h5>
                        <div class="owl-carousel" data-autoheight="true" data-desktop="3" data-desktop-small="3" data-tablet="2" data-mobile="1" data-nav="false" data-margintb="24" data-dots="false" data-loop="true" data-autoplay="true" data-speed="1000" data-autotime="4000">
                            <?php
                                $args = array(
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 4,
                                    'orderby'        => 'rand',
                                    'order'          => 'ASC',
                                    'post__not_in'   => array( get_the_ID() )
                                );
                                $getposts = new WP_Query( $args );
                            ?>
                            <?php while ( $getposts->have_posts() ) : $getposts->the_post(); ?>
                            <div class="hk-blog__item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="thumbnail-box overflow-hidden">
                                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>" class="image-list">
                                    </div>
                                    <div class="content">
                                        <h3 class="limit-text-2"><?php the_title(); ?></h3>
                                        <p><?php echo wp_trim_words( get_the_content(), $num_words = 25, $more = null ); ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>