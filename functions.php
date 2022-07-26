<?php
// Ajouter la prise en charge des images mise en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'entête du site
add_theme_support('title-tags');

// Ajouter la gestion des menus
add_theme_support('menus');
register_nav_menu('header', "En tête du menu");
register_nav_menu('footer', "Pieds de page");

// Déclarer la sidebar

function capitaine_register_widgets(){
    register_sidebar([
        "id" => "homepage",
        "name" => "Sidebar Accueil",
    ]);
}

function capitaine_register_assets() {
    
          
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['popper', 'jquery'], [], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    
    // Déclarer jQuery
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    
    // Déclarer style.css à la racine du thème
    wp_register_style('capitaine_main_style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('capitaine_main_style');


    // Déclarer un autre fichier CSS
    wp_register_style( 'capitaine_main_styles', get_template_directory_uri() . '/css/main.css');
    wp_register_style( 'capitaine_index_styles', get_template_directory_uri() . '/css/index.css');
    
    wp_enqueue_style('capitaine_main_styles');
    wp_enqueue_style('capitaine_index_styles');
    
    // Déclarer le JS
	wp_enqueue_script( 'capitaine', get_template_directory_uri() . '/js/script.js', ['jquery'], '1.0', true );

}

function capitaine_pagination(){
    $pages = paginate_links(['type'=> 'array']);
    if ($pages === null){
        return;
    }
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="pagination justify-content-center">';
        foreach ($pages as $page){
            $active = strpos($page, 'current') !== false;
            $class = 'page-item';
            if ($active){
                $class .= ' active'; 
            }
            echo '<li class="' . $class . '">';
            echo str_replace('page-numbers', 'page-link', $page);
            echo '</li>';
        }
    echo '<ul>';
    echo '</nav>';
}

function capitaine_title_separator() {
    return '|';
}

function capitaine_menu_css_class ($classes) {
    $classes[] = 'nav-item';
    return $classes;
}
function capitaine_menu_link_attributes ($attrs) {
    $attrs['class'] = 'nav-link text-white';
    return $attrs;
}

function capitaine_init(){
    register_taxonomy('actualite', 'post', [
        'labels' => [
            'name' => 'Actualités',
            'singular_name' => 'Actualité',
            'plural_name' => 'Actualités',
            'search_items' => 'Rechercher des Actualité',
            'all_items' => 'Tous les Actualités',
            'edit_item' => 'Editer l\'Actualité',
            'update_item' => 'Mettre à jour l\'Actualité',
            'add_new_item' => 'Ajouter une nouvelle a',
            'add_new_item' => 'Ajouter une nouvelle actualité',
            'menu_name' => 'Actualités',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
    

    register_post_type('module', [
        'labels' => [
            'name' => 'Modules',
            'singular_name' => 'Module',
            'plural_name' => 'Modules',
            'add_new_item' => 'Ajouter un nouveau module',
            'update_item' => 'Mettre à jour un module',
            'edit_item' => 'Modifier ce module',
            'all_items' => 'Tous les modules',
            
        ],
        'public' => true,
        'hierarchical' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail', 'description'],
        'show_in_rest' => true,
        'has_archive' => true,
        ]);

    
    register_post_type('service', [
    'labels' => [
        'name' => 'Services',
        'singular_name' => 'service',
        'plural_name' => 'services',
        'add_new_item' => 'Ajouter un nouveau service',
        'update_item' => 'Mettre à jour un service',
        'edit_item' => 'Modifier ce service',
        'all_items' => 'Tous les services',
        
    ],
    'public' => true,
    'hierarchical' => true,
    'menu_position' => 2,
    'supports' => ['title', 'editor', 'thumbnail', 'description'],
    'show_in_rest' => true,
    'has_archive' => true,
    ]);
}



add_action("init", "capitaine_init");
add_action("widgets_init", "capitaine_register_widgets");
add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );
add_filter( 'document_title_separator', 'capitaine_title_separator' );
add_filter( 'nav_menu_css_class', 'capitaine_menu_css_class' );
add_filter( 'nav_menu_link_attributes', 'capitaine_menu_link_attributes' );

require_once('metaboxes/sponso.php');
SponsoMetaBox::register();

