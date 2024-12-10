<?php get_header(); ?>

    <div class="container-fluid">
        <h1 class="text-center mb-4">Résultats de recherche pour : <?php echo get_search_query(); ?></h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="article-card">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <small>Publié le: <?php echo get_the_date(); ?></small>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="text-center">Aucun résultat trouvé pour votre recherche.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>