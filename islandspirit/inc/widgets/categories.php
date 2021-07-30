<?php
/**
 * Добавление виджета "Категории"
 */

class Categories_Widget extends WP_Widget {

    /**
     * Categories_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Категории',
            array(
                'description' => 'Категории блога'
            )
        );
    }

    /**
     * Вывод виджета
     */
    function widget( $args, $instance ) {
        $categories = get_categories( [
            'taxonomy'     => 'category',
            'type'         => 'post',
            'child_of'     => 0,
            'parent'       => '',
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 1,
            'hierarchical' => 1,
            'exclude'      => '',
            'include'      => '',
            'number'       => 0,
            'pad_counts'   => false,
        ] );

        if( $categories ) :
            ?>
            <div class="content__sidebar-item categories">
                <div class="content__sidebar-header categories__header">Категории новостей</div>
                <ul class="categories__list">
                    <?php foreach ($categories as $category) : ?>
                        <li class="categories__item">
                            <a class="categories__link" href="<?=get_category_link($category->term_id) ?>">
                                <img class="categories__icon" src="<?=get_field('category-icon', $category) ?>" width="24" height="24" alt="">
                                <img class="categories__icon categories__icon--hover" src="<?=get_field('category-icon-hover', $category) ?>" width="24" height="24" alt="">
                                <?=$category->cat_name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php
        endif;
    }
}

function register_categories_widget() {
    register_widget( 'Categories_Widget' );
}
add_action( 'widgets_init', 'register_categories_widget' );