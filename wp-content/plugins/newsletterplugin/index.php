<?php

/*
* Plugin Name: WordPress Newsletter Plugin 
* Plugin URI: http://rasmusmueller.com/grumswp/
* Description: This is a WordPress Newsletter Plugin based on HTML5, CSS, JS an PHP
* Version: 0.6.0
* Author: Rasmus Müller
* Author: http://rasmusmueller.com/grumswp/
* License: GPL2
*/
function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("newsletterplugin/img/grums.webp").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">If you want to follow our journey and dare to be more sustainable, then sign up for our newsletter, 
                                            where you among other things will get information about our future products and events</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Jens Jensen" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="JensJensen@hotmail.com" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Sign up! and save some paper ❤">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">...dare to be part of something new</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_newsletter','newsletter_form');
    # Come back later
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('CustomStylesheet',plugins_url('newsletterplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',array(),null,true);
        
        wp_enqueue_script('CustomScript', plugins_url('newsletterplugin/js/script.js'), array('jquery'), null, true);
        
    }









