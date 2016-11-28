<?php
$a = rand(1, 10);
$b = $_POST["b"];
/*var_dump(b);
echo "$b";
echo "<br>";
var_dump(a);
echo "$a";
echo "<br>";*/
	if ($b > $a)
	{
		echo 'Много' . '<br>' . '<a href="homework2.html">Попробовать ещё</a>';
	} 
	elseif ($b < $a)
	{
		echo 'Мало' . '<br>' . '<a href="homework2.html">Попробовать ещё</a>';
	}
	elseif ($b == $a)
	{
		echo "Вы угадали!";
	}		
?>