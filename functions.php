<?php
if ( ! function_exists( 'pam_setup' ) ) :

function pam_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pam', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pam' ),
        'social'  => __( 'Social Links Menu', 'pam' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'footer', __( 'Footer', 'pam' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image Sizes Begin */

    add_image_size( 'agents', 360, 300, false );
    add_image_size( 'agent', 500, 600, true );
    add_image_size( 'banner', 1920, 253, true );
    /* Pinegrow generated Image Sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // pam_setup

add_action( 'after_setup_theme', 'pam_setup' );


if ( ! function_exists( 'pam_init' ) ) :

function pam_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('properties', array(
    'labels' => 
      array(
        'name' => __( 'Propriedades', 'pam' ),
        'singular_name' => __( 'Propriedade', 'pam' )
      ),
    'description' => __( 'Cadastro do Imóvel', 'pam' ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-admin-multisite',
    'taxonomies' => array( 'category' )
  ));

    register_post_type('corretor', array(
    'labels' => 
      array(
        'name' => __( 'Corretores', 'pam' ),
        'singular_name' => __( 'Corretor', 'pam' )
      ),
    'description' => __( 'Nossos Corretores', 'pam' ),
    'public' => true,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-id',
    'taxonomies' => array( 'category' )
  ));

    register_post_type('sliders', array(
    'labels' => 
      array(
        'name' => __( 'Sliders', 'pam' ),
        'singular_name' => __( 'Slider', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-slides'
  ));

    register_post_type('servicos', array(
    'labels' => 
      array(
        'name' => __( 'Serviços', 'pam' ),
        'singular_name' => __( 'Serviço', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-screenoptions',
    'taxonomies' => array( 'category' )
  ));

    register_post_type('testemonials', array(
    'labels' => 
      array(
        'name' => __( 'Testemunhas', 'pam' ),
        'singular_name' => __( 'A testemunha', 'pam' )
      ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-format-chat'
  ));

    register_post_type('partners', array(
    'labels' => 
      array(
        'name' => __( 'Parceiros', 'pam' ),
        'singular_name' => __( 'O parceiro', 'pam' )
      ),
    'description' => __( 'Cadastre o logo do parceiro', 'pam' ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-nametag',
    'taxonomies' => array( 'category' )
  ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    register_taxonomy('properties_types', 'properties', array(
    'labels' => 
      array(
        'name' => __( 'Imóveis-tipos', 'pam' ),
        'singular_name' => __( 'Imóvel-tipo', 'pam' )
      ),
    'show_in_rest' => true,
    'hierarchical' => true
  ));

    register_taxonomy('properties_status', 'properties', array(
    'labels' => 
      array(
        'name' => __( 'Imóveis-Status', 'pam' ),
        'singular_name' => __( 'Imóvel-status', 'pam' )
      ),
    'show_in_rest' => true,
    'hierarchical' => true
  ));

    register_taxonomy('properties_city', 'properties', array(
    'labels' => 
      array(
        'name' => __( 'Imóveis-Cidade', 'pam' ),
        'singular_name' => __( 'Imóvel-cidade', 'pam' )
      ),
    'show_in_rest' => true,
    'hierarchical' => true
  ));

    register_taxonomy('properties_uf', 'properties', array(
    'labels' => 
      array(
        'name' => __( 'Imóveis-UF', 'pam' ),
        'singular_name' => __( 'Imóvel-uf', 'pam' )
      ),
    'show_in_rest' => true,
    'hierarchical' => true
  ));

    /* Pinegrow generated Taxonomies End */

}
endif; // pam_setup

add_action( 'init', 'pam_init' );


if ( ! function_exists( 'pam_custom_image_sizes_names' ) ) :

function pam_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin */

    return array_merge( $sizes, array(
        'agents' => __( 'Corretores' ),
        'agent' => __( 'Corretor' ),
        'banner' => __( 'Sub Banner' )
    ) );

    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'pam_custom_image_sizes_names' );
endif;// pam_custom_image_sizes_names



if ( ! function_exists( 'pam_widgets_init' ) ) :

function pam_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pam_widgets_init' );
endif;// pam_widgets_init



if ( ! function_exists( 'pam_customize_register' ) ) :

function pam_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'pam_sc_header', array(
    'title' => __( 'Top Bar', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '5'
  ));

    $wp_customize->add_section( 'pam_sc_banner', array(
    'title' => __( 'Sliders', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '10'
  ));

    $wp_customize->add_section( 'pam_sc_features', array(
    'title' => __( 'Destaques', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '15'
  ));

    $wp_customize->add_section( 'pam_sc_services', array(
    'title' => __( 'Serviços', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '20'
  ));

    $wp_customize->add_section( 'pam_sc_categories', array(
    'title' => __( 'Tipos de Imóveis', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '25'
  ));

    $wp_customize->add_section( 'pam_sc_counters', array(
    'title' => __( 'Contadores', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '30'
  ));

    $wp_customize->add_section( 'pam_sc_team', array(
    'title' => __( 'Corretores', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '35'
  ));

    $wp_customize->add_section( 'pam_sc_testemonial', array(
    'title' => __( 'Testemunhas', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '40'
  ));

    $wp_customize->add_section( 'pam_sc_blog', array(
    'title' => __( 'Blog', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '45'
  ));

    $wp_customize->add_section( 'pam_sc_partners', array(
    'title' => __( 'Parceiros', 'pam' ),
    'panel' => 'pam_theme_settings',
    'priority' => '50'
  ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'What are you looking for?', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'pam_sc_categories_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Most Popular Places', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_categories_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_categories'
  ));

    $wp_customize->add_setting( 'pam_sc_categories_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Find Property In Your City', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_categories_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_categories'
  ));

    $wp_customize->add_setting( 'pam_sc_team_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Our Agent', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_team_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_team'
  ));

    $wp_customize->add_setting( 'pam_sc_team_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Meet out small team that make those great products.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_team_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_team'
  ));

    $wp_customize->add_setting( 'pam_sc_header_telefone', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  ));

    $wp_customize->add_control( 'pam_sc_header_telefone', array(
    'label' => __( 'DADOS DA PAM', 'pam' ),
    'description' => __( 'Telefone Fixo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_header',
    'priority' => '25'
  ));

    $wp_customize->add_setting( 'pam_sc_header_email', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_email'
  ));

    $wp_customize->add_control( 'pam_sc_header_email', array(
    'description' => __( 'E-Mail', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_header',
    'priority' => '30',
    'input_attrs' => 
      array(
        'placeholder' => 'contato@pamconsultoria.com.br'
      )
  ));

    $wp_customize->add_setting( 'pam_sc_header_endereco', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  ));

    $wp_customize->add_control( 'pam_sc_header_endereco', array(
    'description' => __( 'Endereço', 'pam' ),
    'type' => 'textarea',
    'section' => 'pam_sc_header',
    'priority' => '35'
  ));

    $wp_customize->add_setting( 'pam_sc_header_facebook', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_facebook', array(
    'label' => __( 'MIDIAS SOCIAIS', 'pam' ),
    'description' => __( 'Facebook', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header',
    'priority' => '5'
  ));

    $wp_customize->add_setting( 'pam_sc_header_twitter', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_twitter', array(
    'description' => __( 'Twitter', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header',
    'priority' => '10'
  ));

    $wp_customize->add_setting( 'pam_sc_header_linkedin', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_linkedin', array(
    'description' => __( 'Linkedin', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header',
    'priority' => '15'
  ));

    $wp_customize->add_setting( 'pam_sc_header_instagram', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_instagram', array(
    'description' => __( 'Instagram', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header',
    'priority' => '20'
  ));

    $wp_customize->add_setting( 'display_pam_sc_features', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_features', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_features',
    'priority' => '0'
  ));

    $wp_customize->add_setting( 'pam_sc_features_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'What are you looking for?', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_features_main_title_h1', array(
    'label' => __( 'Display Section Features', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'pam_sc_features_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_features_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_features'
  ));

    $wp_customize->add_setting( 'display_pam_sc_service', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_service', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'pam_sc_services_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'What are you looking for?', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_services_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'pam_sc_services_main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_services_main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'btn_label', array(
    'type' => 'theme_mod',
    'default' => __( 'Read More', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'btn_label', array(
    'label' => __( 'Button Label', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'btn_link', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'btn_link', array(
    'label' => __( 'Button Link', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_services'
  ));

    $wp_customize->add_setting( 'display_pam_sc_categories', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_categories', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_categories',
    'priority' => '0'
  ));

    $wp_customize->add_setting( 'display_pam_sc_counters', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_counters', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_counters'
  ));

    $wp_customize->add_setting( 'counter_h1', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'counter_h1', array(
    'label' => __( 'Clientes Satisfeitos', 'pam' ),
    'description' => __( 'Valores ', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_counters'
  ));

    $wp_customize->add_setting( 'counters_p', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'counters_p', array(
    'description' => __( 'Texto', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_counters'
  ));

    $wp_customize->add_setting( 'display_pam_sc_team', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_team', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_team',
    'priority' => '0'
  ));

    $wp_customize->add_setting( 'display_pam_sc_testemonials', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_testemonials', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_testemonial',
    'priority' => '0'
  ));

    $wp_customize->add_setting( 'pam_sc_testemonial_main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Our Testimonial', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'pam_sc_testemonial_main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_testemonial'
  ));

    $wp_customize->add_setting( 'display_pam_sc_blog', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_blog', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_blog'
  ));

    $wp_customize->add_setting( 'main_title_h1', array(
    'type' => 'theme_mod',
    'default' => __( 'Latest news', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_h1', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_blog'
  ));

    $wp_customize->add_setting( 'main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Check out some recent news posts.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_blog'
  ));

    $wp_customize->add_setting( 'display_pam_sc_partners', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'display_pam_sc_partners', array(
    'label' => __( 'Selecione para exibir', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_partners'
  ));

    $wp_customize->add_setting( 'title_h4', array(
    'type' => 'theme_mod',
    'default' => __( 'Brands Partners', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'title_h4', array(
    'label' => __( 'Titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_partners'
  ));

    $wp_customize->add_setting( 'main_title_p', array(
    'type' => 'theme_mod',
    'default' => __( 'Check out some recent news posts.', 'pam' ),
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'main_title_p', array(
    'label' => __( 'Sub-titulo', 'pam' ),
    'type' => 'text',
    'section' => 'pam_sc_partners'
  ));

    $wp_customize->add_setting( 'pam_sc_header_twitter', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_twitter', array(
    'label' => __( 'Twitter', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_header_linkedin', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_linkedin', array(
    'label' => __( 'Linkedin', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'pam_sc_header_instagram', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'esc_url_raw'
  ));

    $wp_customize->add_control( 'pam_sc_header_instagram', array(
    'label' => __( 'Instagram', 'pam' ),
    'type' => 'url',
    'section' => 'pam_sc_header'
  ));

    $wp_customize->add_setting( 'share_social_list', array(
    'type' => 'theme_mod',
    'sanitize_callback' => $pgwp_sanitize
  ));

    $wp_customize->add_control( 'share_social_list', array(
    'label' => __( 'Mostrar Corpartilhar', 'pam' ),
    'type' => 'checkbox',
    'section' => 'pam_sc_blog'
  ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pam_customize_register' );
endif;// pam_customize_register


if ( ! function_exists( 'pam_enqueue_scripts' ) ) :
    function pam_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'pam-ieemulationmodeswarning', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', null, '1.10', false );

    wp_enqueue_script( 'pam-popper', get_template_directory_uri() . '/js/popper.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-bootstrapsubmenu', get_template_directory_uri() . '/js/bootstrap-submenu.js', null, '1.10', true );

    wp_enqueue_script( 'pam-rangeslider', get_template_directory_uri() . '/js/rangeslider.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerymbytplayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.js', null, '1.10', true );

    wp_enqueue_script( 'pam-wow', get_template_directory_uri() . '/js/wow.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-bootstrapselect', get_template_directory_uri() . '/js/bootstrap-select.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jqueryscrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerymcustomscrollbarconcat', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-leaflet', get_template_directory_uri() . '/js/leaflet.js', null, '1.10', true );

    wp_enqueue_script( 'pam-leafletproviders', get_template_directory_uri() . '/js/leaflet-providers.js', null, '1.10', true );

    wp_enqueue_script( 'pam-leafletmarkercluster', get_template_directory_uri() . '/js/leaflet.markercluster.js', null, '1.10', true );

    wp_enqueue_script( 'pam-dropzone', get_template_directory_uri() . '/js/dropzone.js', null, '1.10', true );

    wp_enqueue_script( 'pam-slick', get_template_directory_uri() . '/js/slick.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jqueryfilterizr', get_template_directory_uri() . '/js/jquery.filterizr.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', null, '1.10', true );

    wp_enqueue_script( 'pam-jquerycountdown', get_template_directory_uri() . '/js/jquery.countdown.js', null, '1.10', true );

    wp_enqueue_script( 'pam-maps', get_template_directory_uri() . '/js/maps.js', null, '1.10', true );

    wp_enqueue_script( 'pam-app', get_template_directory_uri() . '/js/app.js', null, '1.10', true );

    wp_enqueue_script( 'pam-ieviewportbugworkaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', null, '1.10', true );

    wp_enqueue_script( 'pam-iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', null, '2.10', true );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_enqueue_style( 'pam-style', '//maps.googleapis.com', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-style-1', '//fonts.googleapis.com', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-animate', get_template_directory_uri() . '/css/animate.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-bootstrapsubmenu', get_template_directory_uri() . '/css/bootstrap-submenu.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-bootstrapselect', get_template_directory_uri() . '/css/bootstrap-select.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-leaflet', get_template_directory_uri() . '/css/leaflet.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-map', get_template_directory_uri() . '/css/map.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-linearicons', get_template_directory_uri() . '/fonts/linearicons/linearicons.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-jquerymcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-dropzone', get_template_directory_uri() . '/css/dropzone.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-slick', get_template_directory_uri() . '/css/slick.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-style-2', get_template_directory_uri() . '/css/style.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-red', get_template_directory_uri() . '/css/skins/red.css', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-style-3', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700', null, '1.10', 'all' );

    wp_enqueue_style( 'pam-ieviewportbugworkaround', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css', null, '1.10', 'all' );

    wp_deregister_style( 'pam-style-4' );
    wp_enqueue_style( 'pam-style-4', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pam_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_pg_pagination.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";
require_once "inc/wp_smart_navwalker.php";
require_once "inc/wp_simple_form_mailer.php";

    /* Pinegrow generated Include Resources End */

/* Enqueue Admin Styles and Scripts */

function pam_selectively_enqueue_admin_script( $page ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Enqueue Admin Styles Begin */

    /* Pinegrow generated Enqueue Admin Styles End */
    
    /* Pinegrow generated Enqueue Admin Scripts Begin */

    wp_enqueue_script( 'pam-iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', null, '2.10', true );

    /* Pinegrow generated Enqueue Admin Scripts End */
        
}
add_action( 'admin_enqueue_scripts', 'pam_selectively_enqueue_admin_script' );

/* End Enqueue Admin Styles and Scripts */

?>