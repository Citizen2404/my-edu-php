<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Покажем время без ошибок</title>
 </head>
 <body>
<h1>Покажем время без ошибок</h1>
<b>Введите дату:
<select>
<?php for ($min = 0; $i < 60; $min++) ?>
<option value=<?= $min ?>>
</option></select>
$minute = 42;
function minutes ($arg) {
	if ($arg < 11 or $arg > 19) {
		$time = ['минут', 'минута', 'минуты', 'минуты', 'минуты', 'минут', 'минут', 'минут', 'минут', 'минут', 'минут'];
		$last_digit = (($arg / 10) - floor ($arg / 10)) * 10;
		$result = $time [$last_digit];
	}
	else {
		$time = 'минут';
		$result = $time;
	};
	return $result;
};
echo $minute . " " . minutes ($minute);
?>
</html>
