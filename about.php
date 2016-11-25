<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<style>
	table {
    font-family: sans-serif;
}
	td {
    padding: 5px 20px;
}
</style>
	<title>Document</title>
</head>
<body>
<h1>Страница пользователя Иван</h1>
<?php
$name='Иван';
$age='30';
$email='offnya@gmail.com';
$city='Москва';
$about='Интернет-маркетолог';
echo "<table>
		<tr>
			<td>Имя</td>
			<td>$name</td>
		</tr>
		<tr>
			<td>Возраст</td>
			<td>$age</td>
		</tr>
		<tr>
			<td>Адрес электронной почты</td>
			<td><a href='mailto:$email'>$email</a></td>
		</tr>
		<tr>
			<td>Город</td>
			<td>$city</td>
		</tr>
		<tr>
			<td>О себе</td>
			<td>$about</td>
		</tr>
</table>"

//без таблицы ничего не получалось, через <br> делать не хотелось
//echo "Имя" ." " . "$name" . PHP_EOL;
//echo "Возраст" ." " . "$age" . PHP_EOL;
//echo "Адрес электронной почты" ." " . "$email" . PHP_EOL;
//echo "Город" ." " . "$city" . PHP_EOL;
//echo "О себе" ." " ."$about";
?>
</body>
</html>
