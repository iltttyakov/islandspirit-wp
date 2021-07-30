<?php
/**
 * Добавление виджета "Подписка на социальные сети"
 */

class Social_Widget extends WP_Widget {

    /**
     * Social_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Социальные сети',
            array(
                'description' => 'Ссылки на социальные сети'
            )
        );
    }

    /**
     * Вывод виджета
     */
    function widget( $args, $instance ) {
        ?>
        <ul class="content__sidebar-item social">

            <?php if (get_field('youtube', 'option')) : ?>
                <li class="social__item">
                    <span class="social__icon-container">
                      <svg class="social__icon" width="24" height="24" aria-hidden="true" role="img">
                        <use xlink:href="#icon-youtube"></use>
                      </svg>
                    </span>
                        подписаться на youtube
                    <a class="social__link" href="<?=get_field('youtube', 'option') ?>"></a>
                </li>
            <?php endif; ?>

            <?php if (get_field('facebook', 'option')) : ?>
                <li class="social__item">
                    <span class="social__icon-container">
                      <svg class="social__icon" width="24" height="24" aria-hidden="true" role="img">
                        <use xlink:href="#icon-facebook"></use>
                      </svg>
                    </span>
                        поставить нравится Facebook
                    <a class="social__link" href="<?=get_field('facebook', 'option') ?>"></a>
                </li>
            <?php endif; ?>

            <?php if (get_field('instagram', 'option')) : ?>
                <li class="social__item">
                    <span class="social__icon-container">
                      <svg class="social__icon" width="24" height="24" aria-hidden="true" role="img">
                        <use xlink:href="#icon-instagram"></use>
                      </svg>
                    </span>
                        подписаться на Инстаграм
                    <a class="social__link" href="<?=get_field('instagram', 'option') ?>"></a>
                </li>
            <?php endif; ?>

        </ul>
        <?php
    }
}

function register_social_widget() {
    register_widget( 'Social_Widget' );
}
add_action( 'widgets_init', 'register_social_widget' );