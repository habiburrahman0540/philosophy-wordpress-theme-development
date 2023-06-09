<?php
if(site_url() == "http://localhost/mysite/"){
    define("VERSION", time());
}else{
    define("VERSION",wp_get_theme()->get("version"));
}
function philosophy_theme_setup(){
    load_theme_textdomain("philosophy");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("html5",array("search-form","comment-list"));
    add_theme_support("post-formats",array("image","audio","video","gallery","link","quote"));
    add_editor_style("/assets/css/editor-style.css");
}
add_action("after_setup_theme","philosophy_theme_setup");

function philosophy_style_script(){
    wp_enqueue_style('font-awesome-min',get_theme_file_uri("/assets/css/font-awesome/css/font-awesome.min.css"),null,"1.0");
    wp_enqueue_style('fonts-style',get_theme_file_uri("/assets/css/fonts.css"),null,"1.0");
    wp_enqueue_style('base-style',get_theme_file_uri("/assets/css/base.css"),null,"1.0");
    wp_enqueue_style('vendor-stylefont-awesome-min',get_theme_file_uri("/assets/css/vendor.css"),null,"1.0");
    wp_enqueue_style('main-style',get_theme_file_uri("/assets/css/main.css"),null,"1.0");
    wp_enqueue_style("philosophy-style",get_stylesheet_uri(),null,"1.0");
    wp_enqueue_script('modernizr-script',get_theme_file_uri("/assets/js/modernizr.js"),null,"1.0");
    wp_enqueue_script('pace-script',get_theme_file_uri("/assets/js/pace.min.js"),null,"1.0");
    wp_enqueue_script('plugins-script',get_theme_file_uri("/assets/js/plugins.js"),array("jquery"),"1.0",true);
    wp_enqueue_script('main-script',get_theme_file_uri("/assets/js/main.js"),array("jquery"),"1.0",true);

}
add_action("wp_enqueue_scripts","philosophy_style_script");