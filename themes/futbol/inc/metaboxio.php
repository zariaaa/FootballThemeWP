<?php

// Meta Box
add_filter( 'rwmb_meta_boxes', 'wxy__metaboxio_fields' );

function wxy__metaboxio_fields( $meta_boxes ) {
	
	
	
	// ============================================================== //
	
	
	
	// Link
	$meta_boxes[] = array(
        'title'      => __( 'Опции', 'futbol' ),
        'post_types' => 'ic_partners',
        'context' => 'normal',
        'fields'     => array(
            
			array(
                'id'      => 'f_link',
                'type'    => 'text',
                'name'	  => 'Линк',
                'placeholder'	  => 'http://',
            ),
        
        ),
    );
	
	
	
	
	// Team
	$meta_boxes[] = array(
        'title'      => __( 'Опции', 'futbol' ),
        'post_types' => 'ic_team',
        'context' => 'normal',
        'fields'     => array(
            
			array(
                'id'      => 'f_number',
                'type'    => 'number',
                'name'	  => 'Номер',
            ),
            
			array(
			    'name'            => 'Позиция',
			    'id'              => 'f_position',
			    'type'            => 'select',
			    // Array of 'value' => 'Label' pairs
			    'options'         => choise_position(),
			    
			    // Placeholder text
			    'placeholder'     => 'Изберете позиция',
			    
			),
            
			
            
			
        
        ),
    );
    return $meta_boxes;
}
