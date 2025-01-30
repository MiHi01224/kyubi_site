<?php

// 初期設定
function my_theme_support()
{
    add_theme_support('title-tag'); #タイトルタグの出力
    add_theme_support('automatic-feed-links'); #RSSフィードの出力
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script')); #HTML5に変換
};
add_action('after_setup_theme', 'my_theme_support');

// 色々読み込み
function my_style_output()
{
    /* reset css */
    wp_enqueue_style(
        'reset',
        'https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css'
    );
    /* google-font */
    wp_enqueue_style(
        'google-font',
        'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Major+Mono+Display&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap&text=menuclosプロフィール制作実績ご依頼についてお問い合わせ',
        array(),
        null
    );

    /* css追加 */
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css',
        array('reset'),
        '1.0.0',
        'all'
    );

    /* js追加 */
    wp_enqueue_script(
        'main-script',
        get_theme_file_uri('/base.js'),
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'my_style_output');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'post';
    }
    return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* 記事の最初の画像をアイキャッチ画像にする */
function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    if (empty($first_img)) {
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}



// Gutenberg用のCSSを読み込まない

function my_delete_plugin_files()
{
    //IDを指定し解除
    wp_deregister_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'my_delete_plugin_files');

//　管理画面のアイコンをログインした人のみ読み込むように
function dashicons_dequeue_styles()
{
    if (current_user_can('update_core')) {
        return;
    }
    wp_deregister_style('dashicons');
}
add_action('wp_enqueue_scripts', 'dashicons_dequeue_styles');
