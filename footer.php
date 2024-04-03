<?php wp_footer(); ?>
<?php get_template_part( 'parts/newsletter' ); ?>

<section class="footer">
    <div class="footer-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </div>

    <div class="copyright">
            <p>&copy; <?php echo date("Y"); ?> DAL FERRO</p>
    </div>
</section>

</footer>

</body>
</html>
