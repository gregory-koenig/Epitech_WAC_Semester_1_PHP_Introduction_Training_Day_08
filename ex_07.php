<?php
function count_char($str) {
	$str1 = preg_replace("#\s+#", "", $str);
	$tab = array();
	foreach (count_chars($str1, 1) as $key => $value) {
		$tab[chr($key)] = $value;
	}
	return $tab;	
}
?>
