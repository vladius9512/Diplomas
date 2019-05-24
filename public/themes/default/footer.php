        <?php if ( ! isset($show) || $show == true) : ?>
            <footer class="footer">
                <hr />
                <div class="container">
                    <p>&copy; <?php echo date( 'Y' ); ?> &#151; <a href="http://www.unitbv.ro" target="_blank"><?php echo( class_exists( 'Settings_lib' ) ? settings_item( 'site.title' ) : 'Universitatea Transilvania din Brașov' ); ?></a></p>
                </div>
            </footer>
        <?php endif; ?>

        <div id="debug"></div>



