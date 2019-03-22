		</div><!-- /boldthemes_content -->
<?php

if ( BoldThemesFramework::$has_sidebar ) {
	include( get_parent_theme_file_path( 'sidebar.php' ) );
}

?>
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->



</div><!-- /pageWrap -->
<?php
if ( function_exists( 'bt_get_tour_options_data' ) ) {
      get_template_part( 'views/forms' );
}

wp_footer();
?>
</body>
</html>