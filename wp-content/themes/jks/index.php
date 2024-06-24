<?php get_header(); ?>

<!-- Begin Main -->
<main class="main homepage">
    <h1 class="d-none"><?php echo bloginfo('name'); ?></h1>
    <section class="homepage__top">
        <div class="homepage__top-hero">
            <div class="owl-carousel" data-desktop="1" data-desktop-small="1" data-tablet="1" data-mobile="1"
                data-nav="false" data-margintb="14" data-dots="false" data-loop="true" data-autoplay="true"
                data-speed="1000" data-autotime="5000">
                <?php while( have_rows('banner', 'option') ) : the_row(); ?>
                <div class="owl-carousel-item">
                    <img src="<?php the_sub_field('banner_image'); ?>" alt="banner" />
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="homepage__top-slider">
            <div class="container">
                <div class="homepage__title text-center">
                    <h2>Dịch Vụ Tại Hong Kong Wedding</h2>
                    <div class="title-below">
                        <div class="icon-box">
                            <i class="fad fa-rings-wedding"></i>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel" data-autoheight="true" data-desktop="3" data-desktop-small="3"
                    data-tablet="2" data-mobile="1" data-nav="false" data-margintb="20" data-dots="false"
                    data-loop="true" data-autoplay="true" data-speed="1000" data-autotime="4000">
                    <?php while( have_rows('service_list', 'option') ) : the_row(); ?>
                    <?php $service_term = get_sub_field('category'); ?>
                    <div class="owl-carousel-item">
                        <a href="<?php echo esc_url( get_term_link( $service_term ) ); ?>" class="d-inline-block w-100">
                            <div class="img-box">
                                <img src="<?php the_sub_field('banner_image'); ?>" alt="<?php the_sub_field('service_name'); ?>" />
                            </div>
                            <h3><?php the_sub_field('service_name'); ?></h3>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage__main">
        <div class="container">
            <div class="homepage__main-album">
                <div class="homepage__title text-center">
                    <h2>Album Ảnh</h2>
                    <div class="title-below">
                        <div class="icon-box">
                            <i class="fad fa-rings-wedding"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepage__tab">
                <nav class="w-100">
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-1" type="button" role="tab">
                            Ngoại cảnh
                        </button>
                        <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2"
                            type="button" role="tab">
                            Studio
                        </button>
                        <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3"
                            type="button" role="tab">
                            Bộ Sưu Tập
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                        aria-labelledby="nav-1-tab">
                        <div class="row">
                            <?php
                                $args = array(
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'post_type' => 'album',
                                    'tax_query' => array(
                                        array (
                                            'taxonomy' => 'danh-muc-album',
                                            'field' => 'slug',
                                            'terms' => 'ngoai-canh',
                                        )
                                    ),
                                );
                            ?>
                            <?php $getposts = new WP_Query( $args ); ?>
                            <?php while ( $getposts->have_posts() ) : $getposts->the_post(); ?>
                            <div class="col-lg-4">
                                <div class="homepage__box">
                                    <a href="<?php the_permalink(); ?>" class="img-box">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                        <div class="row">
                        <?php
                                $args = array(
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'post_type' => 'album',
                                    'tax_query' => array(
                                        array (
                                            'taxonomy' => 'danh-muc-album',
                                            'field' => 'slug',
                                            'terms' => 'studio',
                                        )
                                    ),
                                );
                            ?>
                            <?php $getposts = new WP_Query( $args ); ?>
                            <?php while ( $getposts->have_posts() ) : $getposts->the_post(); ?>
                            <div class="col-lg-4">
                                <div class="homepage__box">
                                    <a href="<?php the_permalink(); ?>" class="img-box">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                        <div class="row">
                            <?php
                                $args = array(
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                                    'post_type' => 'album',
                                    'tax_query' => array(
                                        array (
                                            'taxonomy' => 'danh-muc-album',
                                            'field' => 'slug',
                                            'terms' => 'ao-dai-cuoi',
                                        )
                                    ),
                                );
                            ?>
                            <?php $getposts = new WP_Query( $args ); ?>
                            <?php while ( $getposts->have_posts() ) : $getposts->the_post(); ?>
                            <div class="col-lg-4">
                                <div class="homepage__box">
                                    <a href="<?php the_permalink(); ?>" class="img-box">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage__wedding-dress">
        <div class="container">
            <div class="homepage__main-album">
                <div class="homepage__title text-center">
                    <h2>Về HongKong Wedding</h2>
                    <div class="title-below">
                        <div class="icon-box">
                            <i class="fad fa-rings-wedding"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepage__personal">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="w-100" src="<?php the_field( 'introduce_image', 'option' ); ?>" alt="Giới thiệu">
                    </div>
                    <div class="col-lg-7">
                        <ul class="nav nav-pills mb-3 mt-lg-0 mt-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-about" type="button" role="tab"
                                    aria-controls="pills-about" aria-selected="true">Giới Thiệu</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-service" type="button" role="tab"
                                    aria-controls="pills-service" aria-selected="false">Dịch Vụ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-promotion-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-promotion" type="button" role="tab"
                                    aria-controls="pills-promotion" aria-selected="false">Ưu Đãi</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                                <?php the_field( 'introduce', 'option' ); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">
                                <?php the_field( 'service', 'option' ); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-promotion" role="tabpanel" aria-labelledby="pills-promotion-tab">
                                <?php the_field( 'promotion', 'option' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage__evaluate">
        <div class="container">
            <div class="homepage__main-album mb-4">
                <div class="homepage__title text-center">
                    <h2>Phản Hồi Khách Hàng</h2>
                    <div class="title-below">
                        <div class="icon-box">
                            <i class="fad fa-rings-wedding"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php while( have_rows('feedbacks', 'option') ) : the_row(); ?>
                        <div class="col-12 col-lg-6">
                            <div class="box">
                                <div class="box-title d-flex align-items-center justify-content-between">
                                    <img src="<?php the_sub_field( 'feedback_img' ); ?>" alt="<?php the_sub_field( 'feedback_name' ); ?>">
                                    <div class="box-title__body">
                                        <h5>
                                            <?php the_sub_field( 'feedback_name' ); ?> <span>- <?php the_sub_field( 'feedback_location' ); ?></span>
                                        </h5>
                                        <div class="box-content">
                                            <?php the_sub_field( 'feedback_content' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-register">
                        <h3 class="text-center mb-3">Đăng Ký Tư Vấn</h3>
                        <?php echo do_shortcode( '[contact-form-7 id="57" title="Đăng ký tư vấn"]' ); ?>    
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="homepage__album-wedding">
        <div class="container">
            <div class="homepage__main-album mb-4">
                <div class="homepage__title text-center">
                    <h2>Pre Wedding</h2>
                    <div class="title-below">
                        <div class="icon-box">
                            <i class="fad fa-rings-wedding"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-layout">
                <?php while( have_rows('prewedding', 'option') ) : the_row(); ?>
                    <?php $youtube_url = get_sub_field( 'prewedding_url' ); ?>
                    <div class="item">
                        <div class="video-wrapper">
                            <iframe loading="lazy" src="<?php echo get_youtube_embed_url( $youtube_url ); ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <section class="homepage__news">
        <div class="container">
            <div class="homepage__main-album mb-4">
                <div class="homepage__title text-center">
                    <h2>Tin tức</h2>
                    <div class="title-below">
                        <div class="icon-box">
                            <i class="fad fa-rings-wedding"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel" data-autoheight="true" data-desktop="3" data-desktop-small="3"
                data-tablet="2" data-mobile="2" data-nav="false" data-margintb="12" data-dots="false"
                data-loop="true" data-autoplay="true" data-speed="1000" data-autotime="4000">
                <?php
                    $args = array(
                        'post_status'    => 'publish',
                        'posts_per_page' => 6,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'cat'            => 1
                    );
                    $getposts = new WP_Query( $args );
                    while ( $getposts->have_posts() ) : $getposts->the_post();
                ?>
                <div class="owl-carousel-item">
                    <a href="<?php the_permalink(); ?>" class="d-inline-block w-100">
                        <div class="box-item">
                            <div class="box-item__thumb">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
                            </div>
                            <h5 class="mt-2"><?php the_title(); ?></h5>
                            <p class="mb-0">Đọc Tiếp <i class="far fa-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->

<?php get_footer(); ?>