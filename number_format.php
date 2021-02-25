<!DOCTYPE html>
<html>
<body>

<?php
function number_format_short( $n ) {
	if ($n > 0 && $n < 1000) {
		// 1 - 999
		$n_format = floor($n);
		$suffix = '';
	} else if ($n >= 1000 && $n < 10000) {
		// 1rb-9rb
		$n_format = round($n / 1000, 0);
		$suffix = 'rb+';
	} else if ($n >= 10000 && $n < 100000) {
		// 10rb-99rb
		$n_format = round($n / 1000, -1);
		$suffix = 'rb+';
	} else if ($n >= 100000 && $n < 1000000) {
		// 100rb-999rb
		$n_format = round($n / 1000, -2);
		$suffix = 'rb+';
	} else if ($n >= 1000000 && $n < 1000000000) {
		// 1jt-999jt
		$n_format = round($n / 1000000, 0);
		$suffix = 'jt+';
	} else if ($n >= 1000000000 && $n < 1000000000000) {
		// 1m-999m
		$n_format = round($n / 1000000000, 0);
		$suffix = 'm+';
	} else if ($n >= 1000000000000) {
		// 1t+
		$n_format = round($n / 1000000000000, 0);
		$suffix = 't+';
	}

	return !empty($n_format . $suffix) ? $n_format . $suffix : 0;
}
$input = 0;
echo number_format_short($input);
echo "<br>";

$input = 990;
echo number_format_short($input);
echo "<br>";


$input = 2400;
echo number_format_short($input);
echo "<br>";


$input = 12000;
echo number_format_short($input);
echo "<br>";

$input = 374000;
echo number_format_short($input);
echo "<br>";


$input = 3450000;
echo number_format_short($input);
echo "<br>";

?>

</body>
</html>
