<?php
    //テーマサポート
    add_theme_support('menus'); 

    //ファイル読み込み
    function portfolioSite_script() {
        wp_enqueue_style('Mpuls1p','https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;400;700&display=swap');
        wp_enqueue_style('googleaps','https://fonts.googleapis.com');
        wp_enqueue_style('gstatic','https://fonts.gstatic.com');
        wp_enqueue_style('style', get_template_directory_uri().'/style.css');
        wp_enqueue_script('jQuery','https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    } 
    add_action( 'wp_enqueue_scripts', 'portfolioSite_script' );
?>