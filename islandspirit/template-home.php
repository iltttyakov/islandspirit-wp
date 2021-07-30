<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

    <section class="first container">
        <div class="first__container">
            <h1 class="first__title">
                доходные <span class="first__title--mobile-blue"><span class="first__title--blue">инвестиции</span><br class="first__title--br">
        в <span class="first__title--blue">недвижимость</span></span> за рубежом
            </h1>
            <div class="first__bottom">
                <p class="first__offer">
                    Наши подписчики получают лучшие доходные проекты для инвестирования
                </p>

                <div id="mlb2-1838090" class="first__subscribe subscribe ml-subscribe-form ml-subscribe-form-1838090">

                    <form class="row-form" action="https://app.mailerlite.com/webforms/submit/b6b2f7" data-code="b6b2f7" method="post" target="_blank">
                        <label>
                            <input type="text" class="form-control" data-inputmask="" name="fields[email]" value="" required>
                            <span>ФИО</span>
                        </label>
                        <label>
                            <input type="email" class="form-control" data-inputmask="" name="fields[email]" autocomplete="email" value="" required>
                            <span>Введите ваш E-mail</span>
                        </label>
                        <input type="hidden" name="ml-submit" value="1">
                        <div class="ml-form-embedSubmit">
                            <button type="submit" class="primary">Хочу получать инвест проекты</button>
                            <button disabled="disabled" style="display:none" type="button" class="loading">
                                <div class="ml-form-embedSubmitLoad"><div></div><div></div><div></div><div></div></div>
                            </button>
                        </div>
                        <p class="subscribe__policy">
                            * мы строго соблюдаем <?=the_privacy_policy_link() ?>
                        </p>
                    </form>
                    <div class="row-success" style="display:none">
                        <h4 class="subscribe__title">Спасибо!</h4>
                        <p class="subscribe__success">Вы успешно присоединились к нашему списку подписчиков.</p>
                    </div>

                    <script>
                        function ml_webform_success_1838090(){var r=ml_jQuery||jQuery;r(".ml-subscribe-form-1838090 .row-success").show(),r(".ml-subscribe-form-1838090 .row-form").hide()}
                    </script>
                    <img src="https://track.mailerlite.com/webforms/o/1838090/b6b2f7?v53cae9d473694604508d13feaac0545b" width="1" height="1" style="max-width:1px;max-height:1px;visibility:hidden;padding:0;margin:0;display:block" alt="." border="0">
                    <script src="https://static.mailerlite.com/js/w/webforms.min.js?v53cae9d473694604508d13feaac0545b" type="text/javascript"></script>

                </div>

                <div class="first__map map">
                    <button class="map__close map__close--hide">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-.14400002360343933 -.14299999177455902 6.598999977111816 6.5980000495910645" width="20" height="20" preserveAspectRatio="xMidYMid meet" fill="#fff">
                            <path d="M5.985.328c.283.283.47.47.188.754L4.1 3.156 6.172 5.23c.283.283.096.47-.188.754s-.47.47-.754.188L3.158 4.098 1.082 6.173c-.282.282-.47.095-.753-.19-.284-.282-.473-.47-.19-.753l2.075-2.074L.14 1.082C-.142.8.046.612.33.328.61.045.8-.142 1.08.14l2.075 2.075L5.23.14c.285-.283.472-.095.755.188z"></path>
                        </svg>
                    </button>

                    <div class="map__marker map__marker--1" data-img="<?=get_template_directory_uri()?>/assets/img/map-1.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>

                    <div class="map__marker map__marker--2" data-img="<?=get_template_directory_uri()?>/assets/img/map-2.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>

                    <div class="map__marker map__marker--3" data-img="<?=get_template_directory_uri()?>/assets/img/map-3.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>

                    <div class="map__marker map__marker--4" data-img="<?=get_template_directory_uri()?>/assets/img/map-4.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>

                    <div class="map__marker map__marker--5" data-img="<?=get_template_directory_uri()?>/assets/img/map-5.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>

                    <div class="map__marker map__marker--6" data-img="<?=get_template_directory_uri()?>/assets/img/map-6.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>

                    <div class="map__marker map__marker--7" data-img="<?=get_template_directory_uri()?>/assets/img/map-7.jpg">
                        <svg class="map__marker-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 30" width="20" height="30" preserveAspectRatio="xMidYMin meet">
                            <path d="M9.375 0A9.375 9.375 0 0 0 0 9.375c0 1.398.308 2.729.855 3.918L7.996 28.79c.342.745.833 1.21 1.379 1.21s1.036-.465 1.379-1.209l7.141-15.498a9.333 9.333 0 0 0 .854-3.918A9.374 9.374 0 0 0 9.375 0zm0 15C6.27 15 3.75 12.48 3.75 9.375S6.27 3.75 9.375 3.75 15 6.27 15 9.375 12.48 15 9.375 15z"></path>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="content container">

        <div class="content__main <?php if (is_front_page()) echo 'content__main--home-page';?>" itemscope itemtype="http://schema.org/BlogPosting">

            <?php get_template_part( 'template-parts/posts-list'); ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

<?php get_footer(); ?>