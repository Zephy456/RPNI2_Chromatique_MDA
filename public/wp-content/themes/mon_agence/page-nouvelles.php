<?php
/* Template Name: Nouvelles */
get_header();
?>

<main class="page">
    <?php
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'    => 'services',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
    ));
    ?>

    <div class="grille-nouvelles">
        <?php if (!empty($posts)) {
            foreach ($posts as $post) {
                setup_postdata($post); ?>

                <article class="carte">
                    <div class="carte_image">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>

                    <h2 class="carte_titre"><?php the_title(); ?></h2>

                    <p class="carte_texte"><?php the_excerpt(); ?></p>

                    <a class="carte_btn" href="<?php the_permalink(); ?>">Lire la suite</a>
                </article>

        <?php }
            wp_reset_postdata();
        } else { ?>
            <p>Aucune nouvelle pour le moment.</p>
        <?php } ?>
    </div>

    <?php
    /*
    if (have_posts()) {
        //tant qu'il restera des articles
        foreach ($posts as $post) { ?>
            <article class="article">
                <header class="article__entete">
                    <h2 class="article__titre">
                        <?php //affiche le lien et le titre de l'article' ?>
                        <a class="article__lien" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h2>
                </header>

                <p class="article__texte"><?php the_content(); ?></p>
                <p>
                    <?php
                    $link = get_field('lien_contact');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title']; ?>
                        <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </p>
            </article>
    <?php }
    }
    */
    ?>
</main>

<?php get_footer() ?>