<?php
get_header();
?>

    <div class="content container">

        <div class="content__main" itemscope itemtype="http://schema.org/Article">

            <?php while (have_posts()) : the_post(); ?>

                <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>

                <section class="post" itemprop="articleSection">

                    <?php
                    $views_meta = get_post_meta($post->ID, 'views', true);
                    if (!$views_meta) {
                        $views = '0 просмотров';
                    } else {
                        $views = $views_meta . ' <span class="post__info-text--label">' . get_noun_plural_form($views_meta, 'просмотр', 'просмотра', 'просмотров') . '</span>';
                    }
                    ?>

                    <div class="post__info">
                        <?php if (get_field('author')) : ?>
                            <div class="post__info-block">
                                <img class="post__info-icon"
                                     src="<?= get_template_directory_uri() ?>/assets/img/user.svg"
                                     width="22" height="22" alt="Автор">
                                <p class="post__info-text" itemprop="author">
                                    <?= get_field('author') ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="post__info-block">
                            <img class="post__info-icon" src="<?= get_template_directory_uri() ?>/assets/img/eye.svg"
                                 width="22" height="22" alt="Автор">
                            <p class="post__info-text"><?= $views ?></p>
                        </div>
                    </div>

                    <img class="post__thumbnail" src="<?= get_the_post_thumbnail_url($post->ID, array(846, 470)); ?>"
                         width="846" height="470" alt="<?= get_the_title() ?>">

                    <h1 class="post__title" itemprop="headline">
                        <?= get_the_title() ?>
                    </h1>

                    <div class="post__content" itemprop="text articleBody">
                        <?= get_the_content() ?>
                    </div>


                    <div class="post__repost repost">
                        <p class="repost-label">Поделитесь статьёй</p>
                        <ul class="repost__list">

                            <li class="repost__item">
                                <noindex>
                                    <a class="repost__link"
                                       href="https://vk.com/share.php?url=<?= get_the_permalink() ?>"
                                       target="_blank">
                                        <span class="visually-hidden">Поделиться в VK</span>
                                        <svg class="repost__icon" width="25" height="25" aria-hidden="true" role="img">
                                            <use xlink:href="#icon-vk"></use>
                                        </svg>
                                    </a>
                                </noindex>
                            </li>

                            <li class="repost__item">
                                <noindex>
                                    <a class="repost__link"
                                       href="http://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=<?= get_the_title() ?>&p%5Bsummary%5D=<?= get_the_excerpt() ?>&p%5Burl%5D=<?= get_the_permalink() ?>&p%5Bimages%5D%5B0%5D=<?= get_the_post_thumbnail_url($post->ID, array(846, 470)); ?>">
                                        <span class="visually-hidden">Поделиться в Facebook</span>
                                        <svg class="repost__icon" width="27" height="27" aria-hidden="true" role="img">
                                            <use xlink:href="#icon-facebook"></use>
                                        </svg>
                                    </a>
                                </noindex>
                            </li>

                            <!--                            <li class="repost__item">-->
                            <!--                                <noindex>-->
                            <!--                                    <a class="repost__link"-->
                            <!--                                       href="https://www.linkedin.com/cws/share?url=-->
                            <? //= get_the_permalink() ?><!--"-->
                            <!--                                       target="_blank">-->
                            <!--                                        <span class="visually-hidden">Поделиться в Linkedin</span>-->
                            <!--                                        <svg class="repost__icon" width="23" height="24" aria-hidden="true" role="img">-->
                            <!--                                            <use xlink:href="#icon-linkedin"></use>-->
                            <!--                                        </svg>-->
                            <!--                                    </a>-->
                            <!--                                </noindex>-->
                            <!--                            </li>-->

                            <li class="repost__item">
                                <noindex>
                                    <a class="repost__link"
                                       href="https://telegram.me/share/url?url=<?= get_the_permalink() ?>&text=<?= get_the_title() ?>"
                                       target="_blank">
                                        <span class="visually-hidden">Поделиться в Telegram</span>
                                        <svg class="repost__icon" width="29" height="27" aria-hidden="true" role="img">
                                            <g clip-path="url(#clip0)">
                                                <path d="M10.987 17.711l-.463 6.515c.662 0 .95-.285 1.293-.627l3.107-2.969 6.438 4.715c1.18.658 2.012.311 2.33-1.087l4.227-19.8v-.001c.375-1.746-.63-2.428-1.78-2l-24.84 9.51c-1.694.657-1.669 1.602-.287 2.03l6.35 1.976 14.75-9.23c.694-.46 1.325-.205.806.255L10.987 17.71z"
                                                      fill="inherit"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <path fill="inherit" d="M0 0h28v28H0z"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </noindex>
                            </li>

                            <li class="repost__item">
                                <noindex>
                                    <a class="repost__link"
                                       href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&amp;url=<?php echo urlencode(get_permalink($post->ID)); ?>">
                                        <span class="visually-hidden">Поделиться в Twitter</span>
                                        <svg class="repost__icon" width="35" height="30" aria-hidden="true" role="img" viewBox="0 0 27 27">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                    </a>
                                </noindex>
                            </li>

                        </ul>
                    </div>

                    <?php if (have_rows('similar_list')): ?>
                        <div class="post__similar similar">
                            <div class="similar__header">
                                <h2 class="similar__title">Похожие статьи</h2>
                                <?php $category = get_the_category()[0] ?>
                                <p class="similar__all">Все статьи рубрики
                                    <a class="similar__all--link" href="<?= get_category_link($category->term_id) ?>">
                                        <?= $category->cat_name ?>
                                    </a>
                                </p>
                            </div>
                            <ul class="similar__list">
                                <?php while (have_rows('similar_list')) : the_row(); ?>
                                    <?php $id = get_sub_field('post'); ?>
                                    <li class="similar__item">
                                        <h3 class="similar__name">
                                            <?= get_the_title($id) ?>
                                        </h3>
                                        <p class="similar__desc">
                                            <?= get_the_excerpt($id) ?>
                                        </p>
                                        <a class="similar__link" href="<?= get_the_permalink($id) ?>">
                                            Читать дальше
                                            <svg class="similar__link-icon" width="7" height="14" aria-hidden="true"
                                                 role="img">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php else : ?>
                        <div class="post__similar similar">
                            <div class="similar__header">
                                <?php $category = get_the_category()[0] ?>
                                <p class="similar__all">Все статьи рубрики
                                    <a class="similar__all--link" href="<?= get_category_link($category->term_id) ?>">
                                        <?= $category->cat_name ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="post__comment comment">
                        <div class="comment__header">
                            <h2 class="comment__title">Комментарии</h2>
                            <p class="comment__count"><?= comments_number() ?></p>
                        </div>
                        <div class="comment__block comment__form">
                            <img class="comment__avatar comment__avatar--form"
                                 src="<?= get_template_directory_uri() ?>/assets/img/user_icon.png" width="60"
                                 height="60"
                                 alt="Аватар">
                            <?php
                            comment_form(array(
                                'title_reply' => '',
                                'comment_notes_before' => '',
                                'comment_notes_after' => '',
                                'logged_in_as' => '',
                                'comment_field' => '<textarea id="comment" name="comment" placeholder="Добавьте комментарий..." aria-required="true"></textarea>',
                            ));
                            ?>
                        </div>

                        <?php $comments = get_comments(array(
                            'post_id' => get_the_ID(),
                        )); ?>
                        <?php if ($comments) : ?>
                            <ul class="comment__list">
                                <?php wp_list_comments(array(), $comments); ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                </section>

            <?php endwhile; ?>

        </div>

        <?php get_sidebar('page'); ?>

    </div>
    <div class="fixed_block_stop"></div>

<?php get_footer(); ?>