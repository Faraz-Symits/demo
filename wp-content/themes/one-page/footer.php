        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; <?php bloginfo('name'); ?> <script>
                document.write(new Date().getFullYear());
            </script></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>