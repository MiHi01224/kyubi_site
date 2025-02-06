    <section class="contact">
        <div class="contact__inner">
            <h2 class="contact__title"><img src="<?php echo get_theme_file_uri('./image/title_contact.svg" alt="コンタクト'); ?>"></h2>
            <p class="contact__text">制作のご依頼はこちらからお問合せください。</p>
            <a class="btn btn--contact" href="<?php echo home_url('/contact/'); ?>">
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

                <ul class="about__list" id="content_area">
                    <?php
                    $args = array(
                        'posts_per_page' => 5,
                        'orderby' => 'rand',
                    );
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()):
                            $the_query->the_post();
                    ?>
                            <li class="about__item">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="about__pic" src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
                                </a>
                            </li>
                        <?php
                        endwhile;
                    else:
                        ?>

                        <p>記事がありません。</p>

                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>

            <h2 class="about__title"><img src="<?php echo get_theme_file_uri('./image/title_about.svg" alt="ご依頼について'); ?>"></h2>
            <p class="about__text">
                <span>SNS等のアイコン・</span>
                <span>動画配信のサムネイルやブランケットなどのグッズ用の一枚絵・</span>
                <span>VtuberやVライバーの立ち絵やLive2d用パーツ分けイラスト、歌ってみたのイラスト・</span>
                <span>SDキャラ等様々なイラストを製作・納品しております。</span>
            </p>
            <a class="btn" href="<?php echo home_url('/about/'); ?>">
                <p class="btn__text"><em class="btn__em">ご依頼について</em>詳しく見る</p>
                <svg class="btn__pic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.29 51.34">
                    <path class="btn__pic--color"
                        d="M46.53,14.54c-1.96.06-3.24.17-5.23.82-4.17,1.35-8.48,4.68-11.46,7.93,2.21-3.86,3.97-8.94,3.97-13.37,0-2.09-.3-3.34-.84-5.23-1.81-6.25-10.84-6.25-12.65,0-.55,1.89-.84,3.14-.84,5.23,0,4.38,1.83,9.51,4,13.35-2.99-3.29-7.28-6.54-11.49-7.91-1.99-.65-3.27-.75-5.23-.82-6.5-.21-9.29,8.38-3.91,12.03,1.62,1.1,2.72,1.77,4.71,2.42,4.17,1.35,9.61,1.2,13.93.32-4.05,1.83-8.46,4.9-11.07,8.49-1.23,1.69-1.73,2.88-2.39,4.72-2.21,6.12,5.1,11.43,10.23,7.44,1.55-1.2,2.52-2.04,3.75-3.73,2.58-3.55,4.11-8.77,4.61-13.15.48,4.42,2.04,9.56,4.65,13.15,1.23,1.69,2.2,2.53,3.75,3.73,5.14,3.99,12.44-1.32,10.23-7.44-.67-1.85-1.16-3.03-2.39-4.72-2.58-3.55-7.07-6.61-11.08-8.45,4.35.91,9.73,1.01,13.94-.36,1.99-.65,3.09-1.31,4.71-2.42,5.38-3.65,2.59-12.24-3.91-12.03Z" />
                </svg>
            </a>
        </div>
    </section>



    </main>

    <footer class="footer">
        <div class="footer__inner">
            <!-- <nav class="footer__nav nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="<?php echo home_url('/profile/'); ?>">プロフィール</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/post/'); ?>">制作実績</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/about/'); ?>">ご依頼について</a></li>
                <li class="nav__item"><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
            </ul>
        </nav> -->
            <small class="footer__copy">&copy;2020-2024 kyubi mika</small>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>