<?php
/*	if( have_rows('section_selection') ):
		printf( "Total Templates = %d", count(get_field('section_selection')) ); echo '<br><br>';
		while( have_rows('section_selection') ): the_row();
			echo get_row_layout(), '<br>'; //$layout = get_row_layout(); //Get the row layout.
		endwhile;
	endif;*/
?>
<?php
if( have_rows('section_selection') ):
	while( have_rows('section_selection') ): the_row();
		if( get_row_layout() == 'faq_section' ){ get_template_part( 'templates/content/flexible-city-content/faq_fc_section' ); }
		if( get_row_layout() == 'address_info_section' ){ get_template_part( 'templates/content/flexible-city-content/address_info_fc_section' ); }
		if( get_row_layout() == 'testimonials_section' ){ get_template_part( 'templates/content/flexible-city-content/testimonials_fc_section' ); }
	endwhile;
endif;
?>
