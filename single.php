<?php get_header(); ?>

<?php
// カテゴリーのデータを取得
$cat = get_the_category();
$cat = $cat[0];
?>

<main id="top" class="main">

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>

            <section class="single">
                <div class="single__inner">
                    <div class="single__content">
                        <img class="single__image" src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
                        <div class="single__info">
                            <a class="single__category" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
                            <h2 class="single__title"><?php the_title(); ?></h2>
                            <p class="single__tag"><?php echo get_the_tag_list('', ' , '); ?></p>
                            <p class="single__time"><?php the_time('Y年n月j日'); ?></p>
                        </div>
                    </div>

                    <div class="single__page page">
                        <ul class="page__list">
                            <li class="page__item"><?php previous_post_link('%link', '←前の作品'); ?></li>
                            <li class="page__item"><a href="<?php echo home_url('/'); ?>">一覧に戻る</a></li>
                            <li class="page__item"><?php next_post_link('%link', '次の作品→'); ?></li>
                        </ul>
                    </div>

                </div>
            </section>

        <?php
        endwhile;
    else:
        ?>

        <p>記事がありません。</p>

    <?php
    endif;
    ?>


    <section class="contact">
        <div class="contact__inner">
            <h2 class="contact__title"><img src="<?php echo get_theme_file_uri('./image/title_contact.svg" alt="コンタクト'); ?>"></h2>
            <p class="contact__text">制作のご依頼はこちらからお問合せください。</p>
            <a class="btn btn--contact" href="#">
                <p class="btn__text">ご依頼・ご相談はこちら</p>
                <svg class="btn__pic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.29 51.34">
                    <path class="btn__pic--path"
                        d="M46.53,14.54c-1.96.06-3.24.17-5.23.82-4.17,1.35-8.48,4.68-11.46,7.93,2.21-3.86,3.97-8.94,3.97-13.37,0-2.09-.3-3.34-.84-5.23-1.81-6.25-10.84-6.25-12.65,0-.55,1.89-.84,3.14-.84,5.23,0,4.38,1.83,9.51,4,13.35-2.99-3.29-7.28-6.54-11.49-7.91-1.99-.65-3.27-.75-5.23-.82-6.5-.21-9.29,8.38-3.91,12.03,1.62,1.1,2.72,1.77,4.71,2.42,4.17,1.35,9.61,1.2,13.93.32-4.05,1.83-8.46,4.9-11.07,8.49-1.23,1.69-1.73,2.88-2.39,4.72-2.21,6.12,5.1,11.43,10.23,7.44,1.55-1.2,2.52-2.04,3.75-3.73,2.58-3.55,4.11-8.77,4.61-13.15.48,4.42,2.04,9.56,4.65,13.15,1.23,1.69,2.2,2.53,3.75,3.73,5.14,3.99,12.44-1.32,10.23-7.44-.67-1.85-1.16-3.03-2.39-4.72-2.58-3.55-7.07-6.61-11.08-8.45,4.35.91,9.73,1.01,13.94-.36,1.99-.65,3.09-1.31,4.71-2.42,5.38-3.65,2.59-12.24-3.91-12.03Z" />
                </svg>
            </a>
        </div>
    </section>

    <section class="about">
        <div class="about__inner">
            <div class="about__scroll">
                <ul class="about__list">
                    <li class="about__item">
                        <a href="#"><img class="about__pic" src="<?php echo get_theme_file_uri('./image/illustration/cool1.jpg'); ?>" alt=""></a>
                    </li>
                    <li class="about__item">
                        <a href="#"><img class="about__pic" src="<?php echo get_theme_file_uri('./image/illustration/Exquisite1.png'); ?>" alt=""></a>
                    </li>
                    <li class="about__item">
                        <a href="#"><img class="about__pic" src="<?php echo get_theme_file_uri('./image/illustration/Exquisite2.png'); ?>" alt=""></a>
                    </li>
                </ul>
                <ul class="about__list">
                    <li class="about__item">
                        <a href="#"><img class="about__pic" src="<?php echo get_theme_file_uri('./image/illustration/cool1.jpg'); ?>" alt=""></a>
                    </li>
                    <li class="about__item">
                        <a href="#"><img class="about__pic" src="<?php echo get_theme_file_uri('./image/illustration/Exquisite1.png'); ?>" alt=""></a>
                    </li>
                    <li class="about__item">
                        <a href="#"><img class="about__pic" src="<?php echo get_theme_file_uri('./image/illustration/Exquisite2.png'); ?>" alt=""></a>
                    </li>
                </ul>
            </div>

            <h2 class="about__title"><img src="<?php echo get_theme_file_uri('./image/title_about.svg" alt="ご依頼について'); ?>"></h2>
            <p class="about__text">
                <span>SNS等のアイコン・</span>
                <span>動画配信のサムネイルやブランケットなどのグッズ用の一枚絵・</span>
                <span>VtuberやVライバーの立ち絵やLive2d用パーツ分けイラスト、歌ってみたのイラスト・</span>
                <span>SDキャラ等様々なイラストを製作・納品しております。</span>
            </p>
            <a class="btn" href="#">
                <p class="btn__text"><em class="btn__em">ご依頼について</em>詳しく見る</p>
                <svg class="btn__pic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.29 51.34">
                    <path class="btn__pic--color"
                        d="M46.53,14.54c-1.96.06-3.24.17-5.23.82-4.17,1.35-8.48,4.68-11.46,7.93,2.21-3.86,3.97-8.94,3.97-13.37,0-2.09-.3-3.34-.84-5.23-1.81-6.25-10.84-6.25-12.65,0-.55,1.89-.84,3.14-.84,5.23,0,4.38,1.83,9.51,4,13.35-2.99-3.29-7.28-6.54-11.49-7.91-1.99-.65-3.27-.75-5.23-.82-6.5-.21-9.29,8.38-3.91,12.03,1.62,1.1,2.72,1.77,4.71,2.42,4.17,1.35,9.61,1.2,13.93.32-4.05,1.83-8.46,4.9-11.07,8.49-1.23,1.69-1.73,2.88-2.39,4.72-2.21,6.12,5.1,11.43,10.23,7.44,1.55-1.2,2.52-2.04,3.75-3.73,2.58-3.55,4.11-8.77,4.61-13.15.48,4.42,2.04,9.56,4.65,13.15,1.23,1.69,2.2,2.53,3.75,3.73,5.14,3.99,12.44-1.32,10.23-7.44-.67-1.85-1.16-3.03-2.39-4.72-2.58-3.55-7.07-6.61-11.08-8.45,4.35.91,9.73,1.01,13.94-.36,1.99-.65,3.09-1.31,4.71-2.42,5.38-3.65,2.59-12.24-3.91-12.03Z" />
                </svg>
            </a>
        </div>
    </section>

</main>
<?php get_footer(); ?>