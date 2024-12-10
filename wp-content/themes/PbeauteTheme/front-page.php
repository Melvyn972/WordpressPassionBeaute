<?php get_header(); ?>

    <div class="container-fluid">
        <!-- Première partie : Un seul article de la catégorie "agenda" -->
        <div id="agenda-article">
            <h2 class="text-center">AGENDA</h2>
            <?php
            $agenda_query = new WP_Query(array(
                'category_name' => 'agenda',
                'posts_per_page' => 1,
            ));
            if ($agenda_query->have_posts()) : while ($agenda_query->have_posts()) : $agenda_query->the_post(); ?>
                <div class="article-card">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <small>Publié le: <?php echo get_the_date(); ?> | Catégories: <?php the_category(', '); ?> |
                        Auteur: <?php the_author(); ?></small>
                </div>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </div>

        <!-- Deuxième partie : Articles publiés il y a 7 jours ou moins -->
        <div id="recent-articles">
            <h2 class="text-center">ACTUALITÉS DE LA SEMAINE</h2>
            <?php
            $recent_query = new WP_Query(array(
                'date_query' => array(
                    array(
                        'after' => '7 days ago',
                    ),
                ),
                'posts_per_page' => -1,
            ));
            if ($recent_query->have_posts()) : while ($recent_query->have_posts()) : $recent_query->the_post(); ?>
                <div class="article-card">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <small>Publié le: <?php echo get_the_date(); ?> | Catégories: <?php the_category(', '); ?> |
                        Auteur: <?php the_author(); ?></small>
                </div>
            <?php endwhile; endif;
            wp_reset_postdata(); ?>
        </div>
    </div>

<?php get_footer(); ?>