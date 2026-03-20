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
//Déclaration des Réalisations
function agence_realisations_custom_post()
{
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Réalisations de Mon Agence', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Réalisations', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Réalisations'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __('Toutes nos réalisations'),
        'view_item'           => __('Voir nos réalisations'),
        'add_new_item'        => __('Ajouter une nouvelle réalisation'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer une réalisation'),
        'update_item'         => __('Modifier une réalisation'),
        'search_items'        => __('Rechercher une réalisation'),
        'not_found'           => __('Non trouvé'),
        'not_found_in_trash'  => __('Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __('Nos réalisations'),
        'description'         => __('Tous sur nos réalisations'),
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
        'rewrite'              => array('slug' => 'realisations')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type('realisations', $args);
}

add_action('init', 'agence_realisations_custom_post', 0);
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

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
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

    // On enregistre notre type d'article personnalisé qu'on nomme ici "realisations" et ses arguments
    register_post_type('services', $args);
}

add_action('init', 'agence_services_custom_post', 0);
?>

<?php
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


<?php // À ajouter dans un gabarit afficher l'image à la une ?>
<?php if ( has_post_thumbnail() ) : ?>
    		<?php the_post_thumbnail(); ?>
<?php endif; ?>



<?php
$image = get_field('image_de_test'); // image_de_test est le nom du ACF
echo wp_get_attachment_image( $image['id'], 'large' ); // large est le format à afficher
?>

<?php 
    // Utiliser le code ci-dessous pour créer une image responsive
    if(has_post_thumbnail()){
        $sizes=array();
        $sizes[0]=wp_get_attachment_image_src(get_post_thumbnail_id(),"large");
        $sizes[1]=wp_get_attachment_image_src(get_post_thumbnail_id(),"medium");
        $sizes[2]=wp_get_attachment_image_src(get_post_thumbnail_id(),"thumbnail");?>

<picture>
    <source media="(min-width: 801px)" srcset="<?php echo $sizes[0][0]; ?>">
    <source media="(min-width: 601px)" srcset="<?php echo $sizes[1][0]; ?>">
    <img src="<?php echo $sizes[2][0];?>" alt="<?php the_title();?>" title="<?php the_title();?>">
</picture>
<?php } ?>