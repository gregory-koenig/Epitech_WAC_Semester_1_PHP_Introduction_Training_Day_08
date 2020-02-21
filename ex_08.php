<?php
function get_median($vals) {
	sort($vals);
	$count = count($vals);
	if ($count % 2 == 0) {
		return ($vals[round($count / 2) - 1] + $vals[round($count / 2)]) / 2;
	} else {
		return $vals[round($count / 2 - 1)];
	}
}
?>
