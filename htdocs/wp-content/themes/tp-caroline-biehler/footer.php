</main>

<footer>
    Copyright <?=date('Y'); ?> DWWM2503 Caroline BIEHLER
    <?php 
        wp_nav_menu([
            'theme_location' => 'foot'
        ])
    ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>