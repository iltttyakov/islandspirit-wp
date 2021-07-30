<?php
/**
 * Добавление виджета "Основатель проекта"
 */

class Founder_Widget extends WP_Widget {

    /**
     * Founder_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Основатель проекта',
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
        <div class="content__sidebar-item founder">
            <img class="founder__photo" src="<?=get_template_directory_uri()?>/assets/img/founder.jpg" width="350" height="525" alt="Людмила Ракшеева ">
            <p class="founder__position">Основатель проекта</p>
            <p class="founder__name">Людмила Ракшеева</p>
        </div>
        <?php
    }
}

function register_founder_widget() {
    register_widget( 'Founder_Widget' );
}
add_action( 'widgets_init', 'register_founder_widget' );