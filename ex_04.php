<?php
function clear_and_replace($string, $word) {
	$str = trim($string);
	return preg_replace("#$word#", "Pangolin", $str, 2);
}
?>
