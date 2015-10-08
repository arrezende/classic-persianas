<?php

//Remove a barra do admim para usuarios logados
show_admin_bar(false);

//Ativa Thumbnails
//verifica se a função existe 
if (function_exists('add_theme_support')) {
add_theme_support( 'post-thumbnails' ); //adiciona o suporte ao Post Thumbanils 
//set_post_thumbnail_size(450, 200, true); // define um valor padrão para o thumbail 
add_image_size('banner-slider', 1150, 550, true); //cria um novo tamanho de imagem 
} 
//menu
function header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'header_menu' );

function footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'footer_menu' );

//Define o tamanho do resumo/excerpt
function get_the_box_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 98);
return $the_str;
}

//Add Custom post type Cortinas

add_action( 'init', 'create_post_type_cortinas' );
function create_post_type_cortinas() {
	$labels_cortinas = array(
    'name' => _x('Cortinas', 'post type general name'),
    'singular_name' => _x('Cortina', 'post type singular name'),
    'add_new' => _x('Adicionar Nova', 'Cortina'),
    'add_new_item' => __('Adicionar nova Cortina'),
    'edit_item' => __('Edite a Cortina'),
    'new_item' => __('Nova Cortina'),
    'all_items' => __('Todas as Cortinas'),
    'view_item' => __('Veja a Cortina'),
    'search_items' => __('Procurar Cortinas'),
    'not_found' =>  __('Nenhuma Cortina cadastrada'),
    'not_found_in_trash' => __('Nenhuma Cortina na lixeira'),
    'parent_item_colon' => '',
    'menu_name' => 'Cortinas'
);
    register_post_type( 'Cortinas',
        array(
            'labels' => $labels_cortinas,
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-archive',
            'taxonomies' => array ('post_tag','category'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        )
    );
}

//Add Custom post type Persianas
add_action( 'init', 'create_post_type_persianas' );
function create_post_type_persianas() {
	$labels_persianas = array(
    'name' => _x('Persianas', 'post type general name'),
    'singular_name' => _x('Persiana', 'post type singular name'),
    'add_new' => _x('Adicionar Nova', 'Persiana'),
    'add_new_item' => __('Adicionar nova Persiana'),
    'edit_item' => __('Edite a Persiana'),
    'new_item' => __('Nova Persiana'),
    'all_items' => __('Todas as Persianas'),
    'view_item' => __('Veja a Persiana'),
    'search_items' => __('Procurar Persianas'),
    'not_found' =>  __('Nenhuma Persiana cadastrada'),
    'not_found_in_trash' => __('Nenhuma Persiana na lixeira'),
    'parent_item_colon' => '',
    'menu_name' => 'Persianas'
);
    register_post_type( 'Persianas',
        array(
            'labels' => $labels_persianas,
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-archive',
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        )
    );
}

//Add Custom post type Toldos

add_action( 'init', 'create_post_type_toldos' );
function create_post_type_toldos() {
	$labels_toldos = array(
    'name' => _x('Toldos', 'post type general name'),
    'singular_name' => _x('Toldo', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Toldo'),
    'add_new_item' => __('Adicionar novo Toldo'),
    'edit_item' => __('Edite o Toldo'),
    'new_item' => __('Novo Toldo'),
    'all_items' => __('Todas as Toldos'),
    'view_item' => __('Veja o Toldo'),
    'search_items' => __('Procurar Toldos'),
    'not_found' =>  __('Nenhum Toldo cadastrado'),
    'not_found_in_trash' => __('Nenhuma Toldo na lixeira'),
    'parent_item_colon' => '',
    'menu_name' => 'Toldos'
);
    register_post_type( 'Toldos',
        array(
            'labels' => $labels_toldos,
            'public' => true,
            'menu_icon' => 'dashicons-archive',
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
        )
    );
}

//Add Custom post type Banners
add_action( 'init', 'create_post_type_banner' );
function create_post_type_banner() {
    $labels_banner = array(
    'name' => _x('banner', 'post type general name'),
    'singular_name' => _x('Banner', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Banner'),
    'add_new_item' => __('Adicionar novo Banner'),
    'edit_item' => __('Edite o Banner'),
    'new_item' => __('Novo Banner'),
    'all_items' => __('Todas os banner'),
    'view_item' => __('Veja o Banner'),
    'search_items' => __('Procurar banner'),
    'not_found' =>  __('Nenhum Banner cadastrado'),
    'not_found_in_trash' => __('Nenhuma Banner na lixeira'),
    'parent_item_colon' => '',
    'menu_icon' => 'dashicons-format-gallery',
    'menu_name' => 'Banner'
);

    $args = array(
    'labels' => $labels_banner,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-images-alt',
    'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
  ); 


    register_post_type( 'banner', $args  );
}

// Widget Footer
    register_sidebar(array(
        'name' => __( 'Widget 1' ),
        'id' => '1-widget-area',
        'description' => __( '1 area de widget' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="title">',
        'after_title' => '</strong>',
    ));

        register_sidebar(array(
        'name' => __( 'Widget 2' ),
        'id' => '2-widget-area',
        'description' => __( '2 area de widget' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="title">',
        'after_title' => '</strong>',
    ));

        register_sidebar(array(
        'name' => __( 'Widget 3' ),
        'id' => '3-widget-area',
        'description' => __( '3 area de widget' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="title">',
        'after_title' => '</strong>',
    ));

        register_sidebar(array(
        'name' => __( 'Widget 4' ),
        'id' => '4-widget-area',
        'description' => __( '4 area de widget' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<strong class="title">',
        'after_title' => '</strong>',
    ));

//Posts relacionados

function ll_related_posts() { 
    $args = array(
    'posts_per_page' => 4,
    'post_in'  => get_the_tag_list(),
    'post_type' => array( 'cortinas', 'persianas' )
    ); 
    $the_query = new WP_Query( $args ); 
    while ( $the_query->have_posts() ) : $the_query->the_post();?> 
        <div class="box-mini">
            <?php if ( has_post_thumbnail() ) { ?> 
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'related-post' ); ?></a>
            <?php } ?> 
            <a href="<?php the_permalink()?>"><strong><?php the_title(); ?></strong></a>
            <p><a href="<?php the_permalink()?>"><?php echo get_the_box_excerpt(); ?>...</a></p>
        </div>
        <?php
    endwhile; 
    echo '<div class="clear"></div></section>'; 
    wp_reset_postdata(); 
}

// Assim que nosso tema for ativado, redireciona para a página de opções
if ( is_admin() && isset( $_GET['activated'] ) ) {
    header( 'Location: ' . admin_url() . 'themes.php?page=classic_opcoes_tema');
}
// Opções do tema
$classic_opcoes_tema = get_option( 'classic_opcoes_tema' );

// Função para verificar e retornar nossas opções
function classic_chk ( $array, $key ) {
    if ( isset( $array[$key] ) ) {
        return $array[$key];
    } else {
        return false;
    }
}
            
// Opções do tema
$classic_opcoes_tema = get_option( 'classic_opcoes_tema' );

// Classe para carregar as opções
load_template( get_template_directory() . '/classes/class-tutsup-opcoes-tema.php' );




?>