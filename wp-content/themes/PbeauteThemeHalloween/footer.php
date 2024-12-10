<footer class="site-footer">
    <?php wp_footer(); ?>
    <div id="haunted-house">
        <img src="<?php echo get_template_directory_uri(); ?>/images/haunted_house.png" alt="Haunted House">
        <button id="close-haunted-house">X</button>
    </div>
    <script>
        document.getElementById('close-haunted-house').addEventListener('click', function () {
            var hauntedHouse = document.getElementById('haunted-house');
            hauntedHouse.style.opacity = '0';
            setTimeout(function () {
                hauntedHouse.style.display = 'none';
            }, 500);
        });
    </script>
</footer>
</body>
</html>