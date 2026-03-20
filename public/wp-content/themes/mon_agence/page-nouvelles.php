<?php
/* Template name: Nouvelles */
get_header();
?>

<main class="page">
    <?php //var_dump($post); //Ce que reçoit la page
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'    => 'nouvelles',
        'post_status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));
    ?>

    <?php

    if (have_posts()) {
        //tant qu'il restera des articles
        foreach ($posts as $post) { ?>
            <article class="article">
                <header class="article__entete">
                    <h2 class="article__titre">
                        <?php //affiche le lien et le titre de l'article'
                        ?>
                        <a class="article__lien" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h2>
                </header>

                <p class="article__texte">
                    <?php
                    the_content();
                    ?>
                </p>
                <p>
                    <?php
                    $link = get_field('lien_contact');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </p>
            </article>
    <?php }
    } ?>
</main>

<?php get_footer() ?>