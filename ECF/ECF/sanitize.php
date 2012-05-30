<?php
function cleanInput($input) {
  $search = array(
  	'@<>@',
    '@<script[^>]*?>.*?</script>@siU',   	// Strip out javascript
    '@<style[^>]*?>.*?</style>@siU',   // Strip style tags properly 
	'@<embed[^>]*?>.*?</embed>@siU',    // embed
	'@<object[^>]*?>.*?</object>@siU',    // object
	'@<iframe[^>]*?>.*?</iframe>@siU',    // iframe	    
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@',         // Strip multi-line comments
	'@</?[^>]*>*@' 		  				// html tags
	
  );


    $output = preg_replace($search, '', $input);
    return $output;
  }

function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}
?>