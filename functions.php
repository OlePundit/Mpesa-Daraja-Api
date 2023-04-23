<?php
function sanitizeString( $var ) {
	global $conn;
	$var = strip_tags( $var );
	$var = htmlentities( $var );
	$var = stripslashes( $var );
	return $conn -> real_escape_string( $var );
}

?>