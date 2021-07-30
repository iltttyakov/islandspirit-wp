<?php
/**
 * Добавление виджета 'Баннер'
 */

class Banner_Widget extends WP_Widget {

    /**
     * Banner_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Заявка на консультацию',
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
        <div class="content__sidebar-item banner">
            <div class="banner__title">
                узнать как начать <span class="banner__title--middle">инвестировать в недвижимость</span> за рубежом
            </div>
            <img class="banner__pic" src="<?=get_template_directory_uri()?>/assets/img/plane-banner.jpg" width="330" height="234" alt="Самолёт">
            <p class="banner__more">
                Консультация
                <svg class="banner__more-icon" width="9" height="17" aria-hidden="true" role="img">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </p>
            <?php if (get_field('request-page', 'option')) : ?>
                <a class="banner__link" href="<?=get_field('request-page', 'option') ?>"></a>
            <?php endif; ?>
        </div>
        <?php
    }
}

function register_banner_widget() {
    register_widget( 'Banner_Widget' );
}
add_action( 'widgets_init', 'register_banner_widget' );