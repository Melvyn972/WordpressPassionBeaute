<?php get_header(); ?>
<div class="container-fluid">
    <div class="container mt-5">
        <h1 class="text-center mb-4">
            <?php
            if (is_category()) {
                single_cat_title();
            } else {
                echo 'Catégorie non trouvée';
            }
            ?>
        </h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="article-card">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <small>Publié le: <?php echo get_the_date(); ?> | Catégories: <?php the_category(', '); ?> |
                            Auteur: <?php the_author(); ?></small>
                </div>
            <?php endwhile; endif; ?>
        <div class="text-center mt-4">
            <a class="btn btn-danger" href="<?php echo get_previous_posts_page_link(); ?>">Page précédente</a>
            <a class="btn btn-danger" href="<?php echo get_next_posts_page_link(); ?>">Page suivante</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>