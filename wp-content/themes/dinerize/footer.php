<?php
/**
 * The template for displaying the footer.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Dinerize
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

	<?php dinerize_footer_before(); ?>

	<?php dinerize_footer(); ?>		
	
	<?php dinerize_footer_after(); ?>

	<?php dinerize_back_to_top(); ?>

	</div> <!-- #content -->

</div> <!-- .main-wrapper -->


<?php dinerize_body_bottom(); ?>

<?php wp_footer(); ?>
</body>
</html>