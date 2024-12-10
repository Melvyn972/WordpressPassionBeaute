<?php get_header(); ?>

<div class="container-fluid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page-content">
            <h1><?php the_title(); ?></h1>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>