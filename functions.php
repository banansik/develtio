<?php

function develtio_theme_setup(){

    register_nav_menus([
        'primary_menu' => 'Menu Develtio',
        'second_menu' => 'Dodatkowe Menu'
    ]);

    wp_enqueue_style( "style", get_template_directory_uri()."/style.css",false,'1.1','all');

}

add_action('after_setup_theme','develtio_theme_setup');


function form_sent()
{
    if(isset($_POST['submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_text_field($_POST['email']);
        $tel = sanitize_text_field($_POST['tel']);
        $miejsc = sanitize_text_field($_POST['miejsc']);
        $tel = sanitize_text_field($_POST['kod']);

        $to = 'mateuszb98@wp.pl';
        $subject = 'Test form';
        $message = ' ' . $name . '---' . $email . ' ' . $tel . ' ' . $miejsc;

        wp_mail($to,$subject,$message);
    }
    }


add_action('wp_head','form_sent');

