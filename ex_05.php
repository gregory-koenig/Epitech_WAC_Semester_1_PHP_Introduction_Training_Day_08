<?php
function str_lower_epur($str = NULL) {
	if (!is_string($str)) {
		return NULL;
	} else {
		$str1 = preg_replace("#\s+#", " ", $str);
		$str2 = trim($str1);
		$str3 = strtolower($str2);
		$str4 = strrev($str3);
		$str5 = ucwords($str4);
		return $str6 = strrev($str5);
	}
}
?>
