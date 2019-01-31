<?php
if( isset($_POST["submit"])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	
	$uploaded_name = $_FILES[ 'fileToUpload' ][ 'name' ];
	$uploaded_type = $_FILES[ 'fileToUpload' ][ 'type' ];
	$uploaded_size = $_FILES[ 'fileToUpload' ][ 'size' ];
	
	if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) &&
		( $uploaded_size < 100000 ) ) {
		
		if( !move_uploaded_file( $_FILES[ 'fileToUpload' ][ 'tmp_name' ], $target_file ) ) {

		}
		else {

		}
	}
	else {
		
	}
}
?>
