<?php
/*
This file is included into functions.php
Use this file to add custom PHP code to functions.php
*/

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'pam_register_required_plugins');

function pam_register_required_plugins()
{
    $plugins = array(

        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'Pam Customizer Plugin', // The plugin name.
            'slug'               => 'pam_customizer_plugin', // The plugin slug (typically the folder name).
            'source'             => dirname(__FILE__) . '/inc/plugins/pam_customizer_plugin.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Advanced Custom Fields',
            'slug'      => 'advanced-custom-fields',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'WP-Sweep',
            'slug'      => 'wp-sweep',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'What Template',
            'slug'      => 'what-template',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Theme Check',
            'slug'      => 'theme-check',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Query Monitor',
            'slug'      => 'query-monitor',
            'required'  => true,
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'SVG Support',
            'slug'      => 'svg-support',
            'required'  => true,
        ),

		    // This is an example of how to include a plugin from the WordPress Plugin Repository.
		    array(
		        'name'      => 'ACF Theme Code',
		        'slug'      => 'acf-theme-code',
		        'required'  => true,
		    ),

				// This is an example of how to include a plugin from the WordPress Plugin Repository.
				array(
				 'name'      => 'Classic Editor classic-editor',
				 'slug'      => 'classic-editor',
				 'required'  => true,
				),

				// This is an example of how to include a plugin from the WordPress Plugin Repository.
				array(
				 'name'      => 'Log Viewer',
				 'slug'      => 'log-viewer',
				 'required'  => true,
				),

			);

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
     $config = array(
 		'id'           => 'pam',                 // Unique ID for hashing notices for multiple instances of TGMPA.
 		'default_path' => '',                      // Default absolute path to bundled plugins.
 		'menu'         => 'tgmpa-install-plugins', // Menu slug.
 		'parent_slug'  => 'themes.php',            // Parent menu slug.
 		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
 		'has_notices'  => true,                    // Show admin notices or not.
 		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
 		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
 		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
 		'message'      => '',                      // Message to output right before the plugins table.

 		/*
 		'strings'      => array(
 			'page_title'                      => __( 'Install Required Plugins', 'pam' ),
 			'menu_title'                      => __( 'Install Plugins', 'pam' ),
 			/* translators: %s: plugin name. * /
 			'installing'                      => __( 'Installing Plugin: %s', 'pam' ),
 			/* translators: %s: plugin name. * /
 			'updating'                        => __( 'Updating Plugin: %s', 'pam' ),
 			'oops'                            => __( 'Something went wrong with the plugin API.', 'pam' ),
 			'notice_can_install_required'     => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'This theme requires the following plugin: %1$s.',
 				'This theme requires the following plugins: %1$s.',
 				'pam'
 			),
 			'notice_can_install_recommended'  => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'This theme recommends the following plugin: %1$s.',
 				'This theme recommends the following plugins: %1$s.',
 				'pam'
 			),
 			'notice_ask_to_update'            => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
 				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
 				'pam'
 			),
 			'notice_ask_to_update_maybe'      => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'There is an update available for: %1$s.',
 				'There are updates available for the following plugins: %1$s.',
 				'pam'
 			),
 			'notice_can_activate_required'    => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'The following required plugin is currently inactive: %1$s.',
 				'The following required plugins are currently inactive: %1$s.',
 				'pam'
 			),
 			'notice_can_activate_recommended' => _n_noop(
 				/* translators: 1: plugin name(s). * /
 				'The following recommended plugin is currently inactive: %1$s.',
 				'The following recommended plugins are currently inactive: %1$s.',
 				'pam'
 			),
 			'install_link'                    => _n_noop(
 				'Begin installing plugin',
 				'Begin installing plugins',
 				'pam'
 			),
 			'update_link' 					  => _n_noop(
 				'Begin updating plugin',
 				'Begin updating plugins',
 				'pam'
 			),
 			'activate_link'                   => _n_noop(
 				'Begin activating plugin',
 				'Begin activating plugins',
 				'pam'
 			),
 			'return'                          => __( 'Return to Required Plugins Installer', 'pam' ),
 			'plugin_activated'                => __( 'Plugin activated successfully.', 'pam' ),
 			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'pam' ),
 			/* translators: 1: plugin name. * /
 			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'pam' ),
 			/* translators: 1: plugin name. * /
 			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'pam' ),
 			/* translators: 1: dashboard link. * /
 			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'pam' ),
 			'dismiss'                         => __( 'Dismiss this notice', 'pam' ),
 			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'pam' ),
 			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'pam' ),

 			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
 		),
 		*/
 	);

 	tgmpa( $plugins, $config );

}

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
