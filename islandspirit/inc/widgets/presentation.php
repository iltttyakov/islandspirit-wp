<?php
/**
 * Добавление виджета 'Баннер'
 */

class Presentation_Widget extends WP_Widget {

    /**
     * Presentation_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Заявка на презентацию',
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
            <img class="banner__pic" src="<?=get_template_directory_uri()?>/assets/img/Presentation_Widget.png" width="330" height="234" alt="Самолёт">
            <div class="banner__title banner__title--middle presentation__title--middle">
                оставить заявку на бесплатную онлайн презентацию недвижимости
            </div>
            <p class="banner__more">
                Перейти
                <svg class="banner__more-icon" width="9" height="17" aria-hidden="true" role="img">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </p>
            <?php if (get_field('presentation-page', 'option')) : ?>
                <a class="banner__link" href="<?=get_field('presentation-page', 'option') ?>"></a>
            <?php endif; ?>
        </div>
        <?php
    }
}

function register_Presentation_Widget() {
    register_widget( 'Presentation_Widget' );
}
add_action( 'widgets_init', 'register_Presentation_Widget' );