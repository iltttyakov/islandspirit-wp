<?php
/*
Template Name: Страница с формой
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <?php wp_head(); ?>
</head>
<body>

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

    <div class="request">
        <div class="request__container container">
            <a href="<?=home_url() ?>" class="request__logo-container">
                <?php if (get_field('logo-main', 'option')) : ?>
                    <img class="request__logo" src="<?=get_field('logo-main', 'option'); ?>" width="297" height="63">
                <?php endif; ?>
            </a>

            <div class="request__subscribe subscribe">

                <?php if( isset($emailSent) && $emailSent == true) : ?>
                    <p class="subscribe__title">Ваше сообщение успешно отправлено!</p>
                <?php else : ?>
                    <h2 class="subscribe__title">Запишитесь на консультацию</h2>

                    <form action="<?php the_permalink(); ?>" method="post">
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
                        <input type="submit" value="Получить консультацию">
                        <input type="hidden" name="submitted" id="submitted" value="true">
                    </form>

                    <p class="subscribe__policy">* мы строго соблюдаем <?=the_privacy_policy_link() ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56581108, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56581108" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154225248-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-154225248-1');
</script>
<!-- /Global site tag (gtag.js) - Google Analytics -->

<!--LiveInternet counter-->
<script type="text/javascript">
    new Image().src = "//counter.yadro.ru/hit?r"+
        escape(document.referrer)+((typeof(screen)=="undefined")?"":
            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
        ";h"+escape(document.title.substring(0,150))+
        ";"+Math.random();</script>
<!--/LiveInternet-->

</body>
</html>