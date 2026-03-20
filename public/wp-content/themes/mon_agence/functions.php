<!-- <?php
        //initialise la fonctionnalité de gestion des menus pour ce thème
        if (function_exists("register_nav_menus")) {
            register_nav_menus(
                array(
                    "principal" => "Menu principal",
                    "secondaire" => "Menu secondaire"
                )
            );
        }
        ?> -->

<?php
//initialise la fonctionnalité de gestion des menus pour ce thème
if (function_exists("register_nav_menus")) {
    register_nav_menus(
        array(
            "principal" => "Menu principal"
        )
    );
}

?>

<?php
//Déclaration des Volets culturels
function agence_volets_culturels_custom_post()
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

add_action('init', 'agence_volets_culturels_custom_post', 0);
?>

<?php
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
?>
<?php
//Déclaration des Services
function agence_services_custom_post()
{

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Services de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Services', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Services'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Nos services'),
        'view_item'           => __('Voir nos services'),
        'add_new_item'        => __('Ajouter un service'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un service'),
        'update_item'         => __('Modifier un service'),
        'search_items'        => __('Rechercher un service'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos services'),
        'description'         => __('Tous sur nos services'),
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
        'rewrite'              => array('slug' => 'services')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "volets_culturels" et ses arguments
    register_post_type('services', $args);
}

add_action('init', 'agence_services_custom_post', 0);
?>