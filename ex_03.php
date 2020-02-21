<?php
function my_mail($mail = NULL) {
	if (!is_string($mail) || !preg_match("#[@][.]#", $mail)) {
		echo NULL;
	} else {
		$var1 = strpbrk($mail, "@");
		$var2 = strrev($var1);
		$var3 = strpbrk($var2, ".");
		$var4 = strrev($var3);
		echo $var5 = substr($var4, 1, -1) . "\n";
	}
}
?>
