<?php

add_filter('wp_handle_upload_prefilter', 'ms_custom_upload_filter' );
function ms_custom_upload_filter( $file ){
	//get_post_type($_REQUEST['post_id']);
	if($file['type'] == 'application/pdf'){
    	add_filter('upload_dir', 'ms_acf_upload_dir');
    }
    return $file;
}

function ms_acf_upload_dir($param) {
	$custom_dir = '/uploads/member-files';
	$param['path'] = WP_CONTENT_DIR . $custom_dir;
	$param['url'] = WP_CONTENT_URL . $custom_dir;
	return $param;
}

?>
