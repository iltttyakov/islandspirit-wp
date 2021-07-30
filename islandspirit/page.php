<?php get_header(); ?>

    <div class="content container">

        <div class="content__main" itemscope itemtype="http://schema.org/Article">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>

                <section class="post">

                    <h1 class="post__title" itemprop="headline">
                        <?=get_the_title() ?>
                    </h1>

                    <div class="post__content" itemprop="text">
                        <?=get_the_content() ?>
                    </div>

                    <?php if (!is_privacy_policy()) : ?>
                        <div class="post__repost repost">
                            <p class="repost-label">Поделитесь статьёй</p>
                            <ul class="repost__list">
                                <li class="repost__item">
                                    <noindex>
                                        <a class="repost__link" rel="nofollow" onclick="window.open('http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>', 'vkontakte', 'width=626, height=436'); return false;" href="http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>" title="Поделиться ВКонтакте">
                                            <span class="visually-hidden">Поделиться в VK</span>
                                            <svg class="repost__icon" width="25" height="25" aria-hidden="true" role="img">
                                                <use xlink:href="#icon-vk"></use>
                                            </svg>
                                        </a>
                                    </noindex>
                                </li>
                                <li class="repost__item">
                                    <noindex>
                                        <a class="repost__link" href="http://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=[TITLE]&p%5Bsummary%5D=[TEXT]&p%5Burl%5D=[LINK]&p%5Bimages%5D%5B0%5D=[IMAGE]" target="_blank">
                                            <span class="visually-hidden">Поделиться в Facebook</span>
                                            <svg class="repost__icon" width="27" height="27" aria-hidden="true" role="img">
                                                <use xlink:href="#icon-facebook"></use>
                                            </svg>
                                        </a>
                                    </noindex>
                                </li>
                                <li class="repost__item">
                                    <a class="repost__link" href="#">
                                        <span class="visually-hidden">Поделиться в Linkedin</span>
                                        <svg class="repost__icon" width="23" height="24" aria-hidden="true" role="img">
                                            <use xlink:href="#icon-linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>

                </section>

            <?php endwhile; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

<?php get_footer();
