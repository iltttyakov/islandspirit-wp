<?php
/**
 * Добавление виджета "Подписка"
 */

class Mailing_Widget extends WP_Widget {

    /**
     * Mailing_Widget constructor.
     */
    function __construct() {
        parent::__construct(
            '',
            'Подписка',
            array(
                'description' => 'Форма подписки'
            )
        );
    }

    /**
     * Вывод виджета
     */
    function widget( $args, $instance ) {
        ?>
        <div id="mlb2-1838090" class="mailing ml-subscribe-form ml-subscribe-form-1838090">

            <form class="content__sidebar-item row-form" action="https://app.mailerlite.com/webforms/submit/b6b2f7" data-code="b6b2f7" method="post" target="_blank">
                <p class="mailing__offer">
                    Наши подписчики получают лучшие доходные проекты для инвестирования
                </p>

                <label class="mailing__label mailing__label--name">
                    <span class="visually-hidden">ФИО</span>
                    <input type="text" class="mailing__input" data-inputmask="" name="fields[email]" placeholder="ФИО" value="" required>
                </label>
                <label class="mailing__label mailing__label--email">
                    <span class="visually-hidden">Введите ваш E-mail</span>
                    <input class="mailing__input" type="email" data-inputmask="" placeholder="Введите ваш E-mail"  name="fields[email]" autocomplete="email" value="" required>
                </label>
                <input type="hidden" name="ml-submit" value="1">
                <div class="ml-form-embedSubmit">
                    <button type="submit" class="mailing__submit primary">Хочу получать инвест проекты</button>
                    <button disabled="disabled" style="display:none" type="button" class="mailing__submit loading">
                        <div class="ml-form-embedSubmitLoad"><div></div><div></div><div></div><div></div></div>
                    </button>
                </div>
                <p class="mailing__policy">
                    * мы строго соблюдаем <?=the_privacy_policy_link() ?>
                </p>
            </form>
            <div class="row-success" style="display:none">
                <h4 class="mailing__success">Спасибо!</h4>
                <p class="mailing__offer">Вы успешно присоединились к нашему списку подписчиков.</p>
            </div>
        </div>
        <?php
    }
}

function register_mailing_widget() {
    register_widget( 'Mailing_Widget' );
}
add_action( 'widgets_init', 'register_mailing_widget' );