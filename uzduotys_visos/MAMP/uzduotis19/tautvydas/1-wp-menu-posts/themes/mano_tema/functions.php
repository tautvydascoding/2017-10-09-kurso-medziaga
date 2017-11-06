<?php

 function nustatomeFailus() {
     //               savo sugalvotas         kelias iki CSS failo                      dependencies
     wp_enqueue_style('customestylename', get_template_directory_uri() . "/css/custom.css", array(), '1.0.0', 'all');   // all - @media
     wp_enqueue_script('customejsvardas', get_template_directory_uri() . "/js/custom.js", array(),
     '1.0.0.0', 'true'); // true - place in  footer
 }

//
add_action('wp_enqueue_scripts',  'nustatomeFailus' );

function ijungiamWPFunkcijas() {
    add_theme_support('menus');
    //           sugalvotas pavadinimas       aprasymas
    register_nav_menu('topmenu',      'Menu atsiras puslapio virsuje');
    register_nav_menu('footermenu',    'Menu atsiras puslapio apacioje');
}
add_action('after_setup_theme', "ijungiamWPFunkcijas");






//
