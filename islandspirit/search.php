<?php get_header(); ?>

    <div class="content container">

        <div class="content__main">

            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

            <?php if ( have_posts() ) : ?>
                <section class="posts">
                    <h2 class="visually-hidden">Список постов</h2>
                    <ul class="posts__list">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            $views_meta = get_post_meta($post->ID, 'views', true);
                            if (!$views_meta) {
                                $views = '0 просмотров';
                            } else {
                                $views = $views_meta . ' ' . get_noun_plural_form($views_meta, 'просмотр', 'просмотра', 'просмотров');
                            }
                            ?>

                            <li class="posts__item entry">
                                <div class="entry__left share">
                                    <?php if (get_field('author-avatar')) : ?>
                                        <img class="entry__author-avatar" src="<?=get_field('author-avatar') ?>" width="40" height="45" alt="Аватар автора">
                                    <?php endif; ?>
                                    <div class="share__item share__open">
                                        <span class="visually-hidden">Поделиться постом</span>
                                        <svg class="share__icon share__open-icon" width="24" height="24" aria-hidden="true" role="img">
                                            <use xlink:href="#icon-share"></use>
                                        </svg>
                                    </div>
                                    <div class="share__item">
                                        <a class="share__link" href="#">
                                            <span class="visually-hidden">Поделиться в Linkedin</span>
                                            <svg class="share__icon" width="15" height="15" aria-hidden="true" role="img">
                                                <use xlink:href="#icon-linkedin"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="share__item">
                                        <a class="share__link" href="#">
                                            <span class="visually-hidden">Поделиться в Facebook</span>
                                            <svg class="share__icon" width="18" height="18" aria-hidden="true" role="img">
                                                <use xlink:href="#icon-facebook"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="share__item">
                                        <a class="share__link" href="#">
                                            <span class="visually-hidden">Поделиться в VK</span>
                                            <svg class="share__icon" width="17" height="17" aria-hidden="true" role="img">
                                                <use xlink:href="#icon-vk"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="entry__main">
                                    <img class="entry__preview" src="<?=get_the_post_thumbnail_url($post->ID, array(260, 238)) ?>" width="260" height="238" alt="">
                                    <div class="entry__right">
                                        <div class="entry__info">
                                            <?php if (get_field('author')) : ?>
                                                <div class="entry__info-block">
                                                    <img class="entry__info-icon" src="<?=get_template_directory_uri()?>/assets/img/user.svg" width="18" height="18" alt="Автор">
                                                    <p class="entry__info-text">
                                                        <?=get_field('author') ?>
                                                    </p>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry__info-block entry__info-block--views">
                                                <img class="entry__info-icon" src="<?=get_template_directory_uri()?>/assets/img/eye.svg" width="18" height="18" alt="Просмотры">
                                                <p class="entry__info-text"><?=$views ?></p>
                                            </div>
                                        </div>
                                        <h3 class="entry__title">
                                            <a href="<?=get_the_permalink() ?>" itemprop="url">
                                                <?=get_the_title(); ?>
                                            </a>
                                        </h3>
                                        <p class="entry__desc">
                                            <?=get_the_excerpt() ?>
                                        </p>
                                        <div class="entry__bottom">
                                            <div class="entry__info-block entry__info-block--views-mobile">
                                                <img class="entry__info-icon" src="<?=get_template_directory_uri()?>/assets/img/eye.svg" width="18" height="18" alt="Автор">
                                                <p class="entry__info-text"><?=$views ?></p>
                                            </div>
                                            <a class="entry__link" href="<?=get_the_permalink() ?>">
                                                Читать дальше
                                                <svg class="entry__link-icon" width="7" height="14" aria-hidden="true" role="img">
                                                    <use xlink:href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <div class="posts__pagination container">
                        <?php if(function_exists('kama_pagenavi')) kama_pagenavi(); ?>
                    </div>

                </section>
            <?php else : ?>
                <p class="consultation__title">Ничего не найдено</p>
            <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

<?php get_footer();

