<?php get_header();
echo "404.php" ?>

<main class="page">

    <h2>Oups! La page demandée n'existe pas!</h2>

    <img src="<?php echo get_template_directory_uri() ?>/liaisons/images/point_exclamation.png" alt="Point d'exclamation">

</main>

<?php get_footer(); ?>