<?php
//site constants

	$sql_site_root = "SELECT * FROM ".MLC_SETTINGS. " ORDER BY `id` ASC"; 
	$content_det_const = $db->getRows($sql_site_root);
	for($i=0;$i<count($content_det_const);$i++){
		define( $content_det_const[$i]['constant_name'], $content_det_const[$i]['field_value'] );
	}
	
	
/*define( "PROJECT_NAME", $content_det_const[0]['field_value'] );

define( "ADMIN_PAGE_TITLE", $content_det_const[1]['field_value'] );

define( "SITE_PATH", $content_det_const[2]['field_value'] );

define( "ADMIN_SITE_PATH", $content_det_const[3]['field_value'] );

define( "PAGINATION_LIMIT", $content_det_const[4]['field_value'] );

define( "ADMIN_COLOUR", $content_det_const[6]['field_value'] ); 

define( "ADMIN_EMAIL", $content_det_const[5]['field_value'] );*/

?>