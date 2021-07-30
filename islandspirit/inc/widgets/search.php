<?php
/**
 * Добавление виджета Поиска
 */

class Search_Widget extends WP_Widget {

    /**
     * Search_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Поиск',
            array(
                'description' => 'Форма поиска'
            )
        );
    }

    /**
     * Вывод виджета
     */
    function widget( $args, $instance ) {
        ?>
            <form role="search" method="get" id="searchform" class="content__sidebar-item search searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label class="search__label">
                    <span class="visually-hidden">Поиск</span>
                    <input class="search__input" type="text" name="s" id="s" placeholder="Поиск" required value="<?php echo get_search_query(); ?>">
                    <svg class="search__icon" width="24" height="24" aria-hidden="true" role="img">
                        <use xlink:href="#icon-search"></use>
                    </svg>
                </label>
            </form>
        <?php
    }
}

function register_search_widget() {
    register_widget( 'Search_Widget' );
}
add_action( 'widgets_init', 'register_search_widget' );