<?php
function mGetNumberVisitor() {
	$fileName_str = "counter.txt";
	$visitor_int = 0;
	$handle = @fopen($fileName_str, "rb+"); // use @ to hide error
	$return = NULL;
	if ( $handle == FALSE ) { // if file does not exist
		$handle = fopen($fileName_str, "wb");
		$return = fwrite($handle, "visitor=" . $visitor_int);
	} else { // if file exists
		$return_str = fgets($handle); // read whole line
		$return_str = substr($return_str, 8); // after "visitor=" (8 characters)
		$visitor_int = intval($return_str) + 1;
		fseek($handle, 8); // jump to cursor position after 8 characters
		$return = fwrite($handle, "" . $visitor_int . " ");
	}
	@fclose($handle);
	return $visitor_int;
}

function mClearVisitorCounter () {
	$fileName_str = "counter.txt";
	$handle = @fopen($fileName_str, "rb+");
	if ( $handle != FALSE ) {
		fseek($handle, 8);
		fwrite($handle, "-1");
	}
	@fclose($handle);
}
?>