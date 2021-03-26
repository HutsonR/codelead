<?php 

//Theme supports
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
	'header-menu'  => 'Основное меню'
) );

// Сайдбары
function true_register_wp_sidebars() {
 
	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Боковая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
 
	/* В подвале - второй сайдбар */
	register_sidebar(
		array(
			'id' => 'true_foot',
			'name' => 'Футер',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );

add_action( 'init', 'custom_post_type', 0 );
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Работы', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Работа', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Работы', 'text_domain' ),
		'name_admin_bar'        => __( 'Работу', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все работы', 'text_domain' ),
		'add_new_item'          => __( 'Добавление работы', 'text_domain' ),
		'add_new'               => __( 'Добавить работу', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Работа', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'taxonomies'            => array( 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

}

// app
add_action( 'init', 'custom_post_type1', 0 );
// Register Custom Post Type
function custom_post_type1() {

	$labels1 = array(
		'name'                  => _x( 'Приложения', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Приложение', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Приложения', 'text_domain' ),
		'name_admin_bar'        => __( 'Приложение', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все приложения', 'text_domain' ),
		'add_new_item'          => __( 'Добавление приложения', 'text_domain' ),
		'add_new'               => __( 'Добавить приложение', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Приложение', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels1,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'taxonomies'            => array( 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'app', $args );

}

// anim
add_action( 'init', 'custom_post_type2', 0 );
// Register Custom Post Type
function custom_post_type2() {

	$labels1 = array(
		'name'                  => _x( 'Анимации', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Анимация', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Анимации', 'text_domain' ),
		'name_admin_bar'        => __( 'Анимация', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Все анимации', 'text_domain' ),
		'add_new_item'          => __( 'Добавление анимации', 'text_domain' ),
		'add_new'               => __( 'Добавить анимацию', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Приложение', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels1,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'taxonomies'            => array( 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'anim', $args );

}

//Load styles & scripts	
function hutson_scripts() {
	wp_enqueue_style( 'hutson-style', get_stylesheet_uri() );
	wp_enqueue_style( 'hutson-main_style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'hutson-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'hutson-aos', get_template_directory_uri() . '/css/aos.css' );
	wp_enqueue_style( 'hutson-slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'hutson-slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );

	wp_enqueue_script( 'hutson-jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hutson-slick.min', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hutson-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'hutson_scripts' );	

// Добавляем страницу настроек
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// ПРОСМОТРЫ
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Просмотры');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
        if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}