<?php get_header(); ?>

<main class="main hk-blog">
    <section class="hk-blog__main">
        <div class="container">
            <div class="homepage__title text-center">
                <h1>Kết quả tìm kiếm cho: <?php echo get_search_query(); ?></h1>
                <div class="title-below">
                    <div class="icon-box">
                        <i class="fad fa-rings-wedding"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row gy-4">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4 col-md-6">
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
                        </div>
                        <?php endwhile; ?>
                        <?php else : ?>
                            <p>Không tìm thấy kết quả phù hợp.</p>
                        <?php endif; ?>
                        <div class="hk-pagination">
                            <?php hk_pagination(); ?>
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