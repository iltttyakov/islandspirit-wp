<?php
/*
Template Name: О компании
*/
?>

<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="content container">

            <div class="content__main content__main--page">

                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

                <section class="about">
                    <h1 class="about__title">Наша миссия</h1>
                    <div class="about__text">
                        <?=get_the_content() ?>
                    </div>
                </section>

                <?php if(get_field('team-list')): ?>
                    <section class="team">
                        <h2 class="team__title">Наша команда</h2>
                        <ul class="team__list">
                            <?php while(has_sub_field('team-list')): ?>
                                <li class="team__item">
                                    <img class="team__photo" src="<?=get_sub_field('photo') ?>" width="220" height="280" alt="<?=get_sub_field('photo') ?>">
                                    <div class="team__right">
                                        <div class="team__person">
                                            <h3 class="team__name">
                                                <?=get_sub_field('name'); ?>
                                            </h3>
                                            <?php if (get_sub_field('position') != '') : ?>
                                                <p class="team__position">
                                                    <?=get_sub_field('position') ?>, <?php if (get_sub_field('location') != '') : ?><span class="team__location"><?=get_sub_field('location') ?></span><?php endif; ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="team__text">
                                           <?=get_sub_field('desc'); ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </section>
                <?php endif; ?>

            </div>

            <?php if(get_field('advantages-list')): ?>
                <section class="advantages advantages--mobile container">
                    <h2 class="advantages__title">
                        ВАШИ ДЕНЬГИ В БЕЗОПАСНОСТИ И РАБОТАЮТ НА ВАС
                    </h2>
                    <ul class="advantages__list">
                        <?php while(has_sub_field('advantages-list')): ?>
                            <li class="advantages__item">
                                <img class="advantages__icon" src="<?=get_sub_field('icon') ?>" width="90" height="90" alt="<?=get_sub_field('text') ?>">
                                <p class="advantages__desc">
                                    <?=get_sub_field('text') ?>
                                </p>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <?php if (get_field('request-page', 'option')) : ?>
                        <a href="<?=get_field('request-page', 'option') ?>" class="advantages__callback button button--white">
                            Консультация
                            <svg class="button__icon" width="9" height="17" aria-hidden="true" role="img">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    <?php endif; ?>

                </section>
            <?php endif; ?>

            <?php get_sidebar(); ?>

        </div>


        <?php if(get_field('advantages-list')): ?>
            <section class="advantages advantages--desktop container">
                <h2 class="advantages__title">
                    ВАШИ ДЕНЬГИ В БЕЗОПАСНОСТИ И РАБОТАЮТ НА ВАС
                </h2>
                <ul class="advantages__list">
                    <?php while(has_sub_field('advantages-list')): ?>
                        <li class="advantages__item">
                            <img class="advantages__icon" src="<?=get_sub_field('icon') ?>" width="90" height="90" alt="<?=get_sub_field('text') ?>">
                            <p class="advantages__desc">
                                <?=get_sub_field('text') ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <?php if (get_field('request-page', 'option')) : ?>
                    <a href="<?=get_field('request-page', 'option') ?>" class="advantages__callback button button--white">
                        Консультация
                        <svg class="button__icon" width="9" height="17" aria-hidden="true" role="img">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </a>
                <?php endif; ?>

            </section>
        <?php endif; ?>

    <?php endwhile; ?>

<?php get_footer(); ?>

