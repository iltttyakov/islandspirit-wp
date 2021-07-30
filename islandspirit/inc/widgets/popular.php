<?php
/**
 * Добавление виджета 'Популярные статьи'
 */

class Popular_Widget extends WP_Widget {

    /**
     * Popular_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Популярные статьи',
            array(
                'description' => ''
            )
        );
    }

    /**
     * Вывод виджета
     */
    function widget( $args, $instance ) {
        ?>
        <?php wp_reset_postdata(); ?>

        <?php
        $posts = new WP_Query( array(
            'posts_per_page' => 7,
            'meta_key'    => 'is-popular',
            'meta_value'  => true,
            'post_type'   => 'post',
        ));

        while ( $posts->have_posts() ) : $posts->the_post();
            $posts_ids[] = get_the_ID();
        endwhile;

        if ($posts->post_count < 7) {
            $posts_by_views = new WP_Query( array(
                'post_type'   => 'post',
                'post_status' => 'publish',
                'posts_per_page' => (7 - $posts->post_count),
                'meta_key' => 'views',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'post__not_in' => $posts_ids
            ));

            $result = new WP_Query();
            $result->posts = array_merge($posts->posts, $posts_by_views->posts);
            $result->post_count = count($result->posts);
        } else {
            $result = $posts;
        }

        ?>
        <div class="content__sidebar-item popular">
            <div class="content__sidebar-header popular__header">Популярные статьи</div>
            <ul class="popular__list">
                <?php while ($result->have_posts()) : $result->the_post(); ?>
                    <li class="popular__item">
                        <h3 class="popular__name">
                            <?=get_the_title() ?>
                        </h3>
                        <span class="popular__more">
                    Открыть статью
                    <svg class="popular__more-icon" width="9" height="17" aria-hidden="true" role="img">
                      <use xlink:href="#icon-arrow"></use>
                    </svg>
                  </span>
                        <a class="popular__link" href="<?=get_the_permalink() ?>"></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php
        wp_reset_postdata();
    }
}

function register_popular_widget() {
    register_widget( 'Popular_Widget' );
}
add_action( 'widgets_init', 'register_popular_widget' );