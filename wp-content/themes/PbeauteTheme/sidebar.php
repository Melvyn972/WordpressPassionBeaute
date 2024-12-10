<aside id="sidebar">
    <?php if (is_active_sidebar('primary-sidebar')) : ?>
        <?php dynamic_sidebar('primary-sidebar'); ?>
    <?php endif; ?>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'navbar-nav',
            'container'      => false,
        ));
        ?>
    </nav>
</aside>