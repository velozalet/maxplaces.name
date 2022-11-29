<div id="posts_navigation_bar" class="posts-navigation-bar mt-5 mb-5">
	<?php
	if( is_singular('post') ){
		/*Previous/Next post navigation functional*/
		$postsNavSettings = array( 'label_next'=>'next', 'label_prev'=>'back', 'label_next_icon'=>'>', 'label_prev_icon'=>'<');
		the_post_navigation( //echo get_the_post_navigation();
			array( //Font Awesome 4: https://www.w3schools.com/icons/fontawesome_icons_directional.asp
				'next_text'=>'<span class="label-post next-post">'.$postsNavSettings['label_next'].'</span> <i class="fa fa-angle-right me-1"></i>',
				'prev_text'=>'<i class="fa fa-angle-left ms-1"></i> <span class="label-post previous-post">'.$postsNavSettings['label_prev'].'</span>',
			)
		);
		/*__/Previous/Next post navigation functional*/
	}
	?>
</div>