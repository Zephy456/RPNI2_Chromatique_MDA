<?php
//initialise la fonctionnalité de gestion des menus pour ce thème
if (function_exists("register_nav_menus")) {
    register_nav_menus(
        array(
            "principal" => "Menu principal"
        )
    );
}

//Déclaration des Réalisations
function agence_realisations_custom_post()
{
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Volets culturels', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Volets culturels', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Volets culturels'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Tous nos volets culturels'),
        'view_item'           => __('Voir nos volets culturels'),
        'add_new_item'        => __('Ajouter un nouveau volet culturel'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un volet culturel'),
        'update_item'         => __('Modifier un volet culturel'),
        'search_items'        => __('Rechercher un volet culturel'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos volets culturels'),
        'description'         => __('Tous sur nos volets culturels'),
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'volets_culturels')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "volets_culturels" et ses arguments
    register_post_type('volets_culturels', $args);
}

add_action('init', 'agence_realisations_custom_post', 0);

//Déclaration de l'Équipe
function agence_equipe_custom_post()
{

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Équipe de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Équipe', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Équipe'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Nos membres'),
        'view_item'           => __('Voir nos membres'),
        'add_new_item'        => __('Ajouter un membre'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un membre'),
        'update_item'         => __('Modifier un membre'),
        'search_items'        => __('Rechercher un membre'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos membres'),
        'description'         => __('Tous sur notre équipe'),
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'equipe')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "volets_culturels" et ses arguments
    register_post_type('equipe', $args);
}

add_action('init', 'agence_equipe_custom_post', 0);

//Déclaration des Services
function agence_services_custom_post()
{

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Nouvelles de MDA', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Nouvelles', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Nouvelles'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Nos nouvelles'),
        'view_item'           => __('Voir nos nouvelles'),
        'add_new_item'        => __('Ajouter une nouvelle'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer une nouvelle'),
        'update_item'         => __('Modifier une nouvelle'),
        'search_items'        => __('Rechercher une nouvelle'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos nouvelles'),
        'description'         => __('Tous sur nos nouvelles'),
        'labels'              => $labels,
        'supports'            => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'              => array('slug' => 'nouvelles')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type('services', $args);
}

add_action('init', 'agence_services_custom_post', 0);

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

if (function_exists('add_image_size')) {
    add_image_size('image-single', 768, 432, true);
    add_image_size('image-bande', 1000, 320, true);
}

add_filter('jpeg_quality', function () {
    return 100;
});

add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images');
function prefix_remove_default_images ( $sizes ) {
    unset( $sizes['thumbnail'] ); // 150px
    unset( $sizes['medium'] ); // 300px 
    unset( $sizes['large'] ); // 1024px 
    unset( $sizes['medium_large'] ); // 768px
    unset( $sizes['1536x536'] );
    return $sizes;
}

/* Ajout de nouveaux formats d'images générés par WordPress */
if(function_exists ( "add_image_size" )){
    add_image_size( "image-single", 768, 432, true);
    add_image_size( "image-bande", 1000, 320, true);
}

/* Désactivation de la compression automatique des images */
add_filter( 'jpeg_quality', 'my_prefix_regenerate_thumbnail_quality');
function my_prefix_regenerate_thumbnail_quality() {
    return 100;
}

/* Création du réglage "Image mise en avant" */
if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}
?>