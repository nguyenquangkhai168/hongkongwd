<div class="hk-blog__cat">
    <h5 class="hk-blog__cat--title">Danh Mục</h5>
    <ul class="list-unstyled mb-3">
        <?php
            $args = array(
                'type'       => 'post',
                'parent'     => 0,
                'hide_empty' => 0
            );
            $categories = get_categories( $args );
        ?>
        <?php foreach ( $categories as $category ) : ?>
            <li>
                <a href="<?php echo get_term_link( $category->slug, 'category' ); ?>">
                    <?php echo $category->name ; ?> <span><?php echo $category->count; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="hk-blog__post-new">
    <h5>Bài Viết Mới</h5>
    <ul class="blog-list list-unstyled mb-2">
        <?php
            $args = array(
                'post_status'    => 'publish',
                'posts_per_page' => 5,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
        ?>
        <?php $getposts = new WP_Query( $args );?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ( $getposts->have_posts() ) : $getposts->the_post(); ?>
            <li class="d-flex align-items-center justify-content-between">
                <a href="<?php the_permalink(); ?>" class="media-blog">
                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                </a>
                <div class="media-content">
                    <h6 class="limit-text-2 mb-1">
                        <a href="<?php the_post_thumbnail_url( 'full' ); ?>"><?php the_title(); ?></a>
                    </h6>
                    <span class="d-flex align-items-center">
                        <i class="fal fa-calendar-alt me-1"></i>    
                        <?php echo get_the_date('d/m/Y'); ?>
                    </span>
                </div>
            </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
</div>