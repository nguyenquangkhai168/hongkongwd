<?php 
    get_header(); 
    $queried_object = get_queried_object();
    $cat_name = $queried_object->name;
    if ( $queried_object->parent > 0 ) {
        $term = get_term( $queried_object->parent );
        $cat_name = $term->name . ' - ' . $queried_object->name;
    }
?>

<main class="main hk-album">
    <div class="hk-album__list">
        <div class="container">
            <div class="homepage__title text-center">
                <h1><?php echo $cat_name; ?></h1>
                <div class="title-below">
                    <div class="icon-box">
                        <i class="fad fa-rings-wedding"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-4">
                    <div class="album-item">
                        <a href="<?php the_permalink(); ?>" class="img-box">
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <p>Danh mục này hiện chưa có bài viết nào.</p>
                <?php endif; ?>
                <div class="hk-pagination">
                    <?php hk_pagination(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>