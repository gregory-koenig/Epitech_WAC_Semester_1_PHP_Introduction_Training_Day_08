<?php
function which_is_longer($str1, $str2) {
	if (!is_string($str1) || !is_string($str2)) {
		return -1;
	} else {
		$compare = strcmp($str1, $str2);
		if ($compare < 0) {
			return $str1;
		} elseif ($compare == 0) {
			return strlen($str1);
		} elseif ($compare > 0) {
			return strlen($str2);
		}
	}
}
?>
