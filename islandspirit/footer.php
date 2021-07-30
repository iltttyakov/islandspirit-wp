</main>

<footer class="footer">
    <div class="footer__container container">
        <div class="footer__top">

            <div class="footer__left">

                <?php if (!is_front_page()) : ?>
                    <a href="<?=home_url() ?>" class="footer__logo">
                        <span class="visually-hidden">На главную</span>
                        <?php if (get_field('logo-main', 'option')) : ?>
                            <img class="footer__logo-pic" src="<?=get_field('logo-main', 'option'); ?>" width="297" height="63">
                        <?php endif; ?>
                    </a>
                <?php else: ?>
                    <div class="footer__logo">
                        <?php if (get_field('logo-main', 'option')) : ?>
                            <img class="footer__logo-pic" src="<?=get_field('logo-main', 'option'); ?>" width="297" height="63">
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('address', 'option')) : ?>
                    <p class="footer__address">
                        <?=get_field('address', 'option'); ?>
                    </p>
                <?php endif; ?>

            </div>

            <div class="footer__right">

                <?php
                wp_nav_menu( [
                    'menu'            => 'main-menu',
                    'container'       => false,
                    'menu_class'      => 'footer__menu menu menu--bottom',
                ] );
                ?>

                <div class="footer__contacts">

                    <ul class="footer__socials profiles">

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

                    <div class="footer__contacts-column">



                        <?php if(get_field('phone-numbers', 'option')): ?>
                            <?php $count = count(get_field('phone-numbers', 'option')) - 1; ?>
                            <?php foreach(get_field('phone-numbers', 'option') as $key => $number) : ?>
                                <a class="footer__phone" href="tel:<?=$number['number'] ?>">
                                    <?=$number['number']; if ($key != $count) echo ','; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (get_field('email', 'option')) : ?>
                            <a class="footer__email" href="mailto:<?=get_field('email', 'option') ?>">
                                <?=get_field('email', 'option') ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <?php if (get_field('request-page', 'option')) : ?>
                        <a href="<?=get_field('request-page', 'option') ?>" class="footer__callback button">
                            Консультация
                            <svg class="button__icon" width="9" height="17" aria-hidden="true" role="img">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <?=the_privacy_policy_link() ?>
            <p class="footer__copyright">Copyright © 2019 Island Spirit</p>
        </div>

    </div>
</footer>

<button class="up">
    <span class="visually-hidden">Наверх</span>
</button>

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
