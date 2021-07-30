<?php
/*
Template Name: HTML-карта сайта
*/
?>

<?php get_header(); ?>

    <div class="content container">

        <div class="content__main">

            <?php
            $cats = get_categories();
            foreach ( $cats as $cat ) {
                $html .= '<h2>Рубрика: ' . $cat->cat_name . '</h2>';
                $html .= '<ul>';
                $posts = get_posts( array(
                    'posts_per_page' => - 1,
                    'cat'            => $cat->cat_ID,
                ) );
                foreach ( $posts as $post ) {
                    setup_postdata( $post );
                    $category = get_the_category($post->ID);
                    if ( $category[0]->cat_ID == $cat->cat_ID ) {
                        $html .= '<li><a href="'. get_the_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';
                    }
                }
                wp_reset_postdata();
                $html .= '</ul>';
            }

            $html .= '<h2>Страницы:</h2>';
            $html .= '<ul>';
            $html .= wp_list_pages( 'exclude=ID&title_li=&echo=0' );
            $html .= '</ul>';
            echo $html;
            ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

<?php get_footer();
