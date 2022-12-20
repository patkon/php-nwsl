<?php

/**
 * web version
 * this is a copy from index.php
 * we inject the css class .probs to hide the section "view in browser"
 */

include '_variables.php';
$get_code = file_get_contents($newsletter_root."index.php");

echo '<style type="text/css">';
echo '.probs { display:none;height:0px; }';
echo '</style>';
echo "$get_code";


?>