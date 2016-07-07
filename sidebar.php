<?php
/*
 #=======================================================
 *
 * sidebar.php
 *
 * The sidebar template for content
 *
 #=======================================================
 */
?>
<?php
		if(is_active_sidebar('main-sidebar'))
		{
			dynamic_sidebar('main-sidebar');
		}
?>
