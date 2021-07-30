<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<?php
if(isset($_POST['submitted'])) {

    if( trim($_POST['first_name']) === '' ) {
        $first_name_error = 'Введите ваше имя';
        $has_error = true;
    } else {
        $first_name = trim($_POST['first_name']);
    }


    if( trim($_POST['second_name']) === '' ) {
        $second_name_error = 'Введите вашу фамилию';
        $has_error = true;
    } else {
        $second_name = trim($_POST['second_name']);
    }

    if( trim($_POST['tel']) === '' ) {
        $tel_error = 'Введите номер телефона';
        $has_error = true;
    } else {
        $tel = trim($_POST['tel']);
    }

    if( trim($_POST['email']) === '' ) {
        $email_error = 'Введите email';
        $has_error = true;
    } else {
        $email = trim($_POST['email']);
    }

    if( trim($_POST['subject']) === '' ) {
        $subject_error = 'Введите тему обращения';
        $has_error = true;
    } else {
        $subject = trim($_POST['subject']);
    }


    if( !isset($has_error) ) {
        $email_to = get_field('email-for-order', 'option');

        if (!isset($email_to) || ($email_to == '') ){
            $email_to = get_option('admin_email');
        }

        $body = "Имя: {$first_name} {$second_name} \n\n Номер телефона: {$tel} \n\n Email: {$email} \n\n Тема обращения: {$subject}";
        $headers = "From: IslandSpirit <info@islandspirit.ru>";

        wp_mail($email_to, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

    <div class="content container">

            <div class="content__main content__main--page">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

                    <section class="contacts">
                        <h2 class="visually-hidden">Контакты</h2>
                        <div class="contacts__container">

                            <?php if (get_field('address', 'option')) : ?>
                                <div class="contacts__block">
                                    <img class="contacts__icon" src="<?=get_template_directory_uri()?>/assets/img/pin.svg" width="50" height="50" alt="">
                                    <h3 class="contacts__title">
                                        Где мы находимся
                                    </h3>
                                    <p class="contacts__info">
                                        <?=get_field('address', 'option'); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php if(get_field('phone-numbers', 'option')): ?>
                                <div class="contacts__block">
                                    <img class="contacts__icon" src="<?=get_template_directory_uri()?>/assets/img/smartphone.svg" width="50" height="50" alt="">
                                    <h3 class="contacts__title">
                                        Как нам позвонить
                                    </h3>
                                    <div class="contacts__info contacts__info--phones">
                                        <?php $count = count(get_field('phone-numbers', 'option')) - 1; ?>
                                        <?php foreach(get_field('phone-numbers', 'option') as $key => $number) : ?>
                                            <a class="contacts__link" href="tel:<?=$number['number'] ?>">
                                                <?=$number['number']; if ($key != $count) echo ','; ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="contacts__block">
                                <img class="contacts__icon" src="<?=get_template_directory_uri()?>/assets/img/mail.svg" width="50" height="50" alt="">
                                <h3 class="contacts__title">
                                    куда нам написать
                                </h3>

                                <?php if (get_field('email', 'option')) : ?>
                                    <a class="contacts__info contacts__link" href="mailto:<?=get_field('email', 'option') ?>">
                                        <?=get_field('email', 'option') ?>
                                    </a>
                                <?php endif; ?>

                                <ul class="contacts__socials profiles profiles--grey">

                                    <?php if (get_field('linkedin', 'option')) : ?>
                                        <li class="profiles__item">
                                            <a class="profiles__link" href="<?=get_field('linkedin', 'option') ?>">
                                                <span class="visually-hidden">Компания в Linkedin</span>
                                                <svg class="profiles__icon" width="28" height="28" aria-hidden="true" role="img">
                                                    <use xlink:href="#icon-linkedin"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_field('facebook', 'option')) : ?>
                                        <li class="profiles__item">
                                            <a class="profiles__link" href="<?=get_field('facebook', 'option') ?>">
                                                <span class="visually-hidden">Компания в Facebook</span>
                                                <svg class="profiles__icon" width="28" height="28" aria-hidden="true" role="img">
                                                    <use xlink:href="#icon-facebook"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_field('vk', 'option')) : ?>
                                        <li class="profiles__item">
                                            <a class="profiles__link" href="<?=get_field('vk', 'option') ?>">
                                                <span class="visually-hidden">Компания в Vk</span>
                                                <svg class="profiles__icon" width="28" height="28" aria-hidden="true" role="img">
                                                    <use xlink:href="#icon-vk"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_field('instagram', 'option')) : ?>
                                        <li class="profiles__item">
                                            <a class="profiles__link" href="<?=get_field('instagram', 'option') ?>">
                                                <span class="visually-hidden">Компания в Instagram</span>
                                                <svg class="profiles__icon" width="28" height="28" aria-hidden="true" role="img">
                                                    <use xlink:href="#icon-instagram"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if (get_field('youtube', 'option')) : ?>
                                        <li class="profiles__item">
                                            <a class="profiles__link" href="<?=get_field('youtube', 'option') ?>">
                                                <span class="visually-hidden">Компания в Youtube</span>
                                                <svg class="profiles__icon" width="28" height="28" aria-hidden="true" role="img">
                                                    <use xlink:href="#icon-youtube"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="consultation">
                        <h2 class="consultation__title">
                            Задайте ваш вопрос
                        </h2>

                        <?php if( isset($emailSent) && $emailSent == true) : ?>
                            <p class="consultation__subtitle">Ваше сообщение успешно отправлено!</p>
                        <?php else : ?>
                            <p class="consultation__subtitle">
                                Заполните форму обратной связи, и уже через 15 минут мы поможем Вам сделать правильную инвестицию в недвижимость
                            </p>
                            <div class="consultation__form">

                                <form class="consultation__form" action="<?php the_permalink(); ?>" method="post">

                                    <label>
                                        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>" required>
                                        <?php if($second_name_error != '') : ?>
                                            <span class="span-label" style="color: #960e0f;"><?=$first_name_error;?></span>
                                        <?php else : ?>
                                            <span class="span-label">Имя</span>
                                        <?php endif; ?>
                                    </label>

                                    <label>
                                        <input type="text" name="second_name" value="<?php if(isset($_POST['second_name'])) echo $_POST['second_name'];?>" required>
                                        <?php if($second_name_error != '') : ?>
                                            <span class="span-label" style="color: #960e0f;"><?=$second_name_error;?></span>
                                        <?php else : ?>
                                            <span class="span-label">Фамилия</span>
                                        <?php endif; ?>
                                    </label>

                                    <label>
                                        <input type="tel" name="tel" value="<?php if(isset($_POST['tel'])) echo $_POST['tel'];?>" required>
                                        <?php if($tel_error != '') : ?>
                                            <span class="span-label" style="color: #960e0f;"><?=$tel_error;?></span>
                                        <?php else : ?>
                                            <span class="span-label">Номер телефона</span>
                                        <?php endif; ?>
                                    </label>

                                    <label>
                                        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" required>
                                        <?php if($email_error != '') : ?>
                                            <span class="span-label" style="color: #960e0f;"><?=$email_error;?></span>
                                        <?php else : ?>
                                            <span class="span-label">E-mail</span>
                                        <?php endif; ?>
                                    </label>

                                    <label>
                                        <input type="text" name="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>" required>
                                        <?php if($subject_error != '') : ?>
                                            <span class="span-label" style="color: #960e0f;"><?=$subject_error;?></span>
                                        <?php else : ?>
                                            <span class="span-label">Тема обращения</span>
                                        <?php endif; ?>
                                    </label>

                                    <input type="submit" value="Отправить">
                                    <input type="hidden" name="submitted" id="submitted" value="true">

                                </form>

                            </div>
                            <p class="consultation__policy">* мы строго соблюдаем <?=the_privacy_policy_link() ?></p>
                        <?php endif; ?>

                    </section>

                <?php endwhile; ?>

            </div>

            <?php get_sidebar(); ?>

        </div>

<?php get_footer(); ?>
