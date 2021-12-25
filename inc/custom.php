<?php
/*
This file is included into functions.php
Use this file to add custom PHP code to functions.php
*/
//* Set the content width based on the theme's design and stylesheet.
if (!isset($content_width)) {
    $content_width = 1080;
}

// Customize function.
if (! function_exists('pam_customize_panels')) {
    // Customize Register action.
    add_action('customize_register', 'pam_customize_panels');

    /**
     * Customize: Panel.
     */
    function pam_customize_panels($wp_customize)
    {
        // Panel: Name.
        $wp_customize->add_panel('pam_theme_settings', array(
        'priority'       => 10,
        'title'          => __('PAM - Ajustes', 'pam'),
        'description'    => __('Configure general settings for the Theme.', 'pam'),
        'capability'     => 'edit_theme_options',
        'active_callback'=> '', // is_front_page
        'theme_supports' => '',

     ));

    }
}

?>
