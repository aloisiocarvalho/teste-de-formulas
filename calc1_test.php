<pre><?php

	include 'calc.php';

	if (somar (5, 2) == 5 + 2 )
		echo 'OK<br>';
	else
		echo 'Erro<br>';

	if (subtrair (5, 2) == 5 - 2 )
		echo 'OK<br>';	
	else
		echo 'Erro<br>';
		
	if (dividir (5, 2) == 5 / 2 )
		echo 'OK<br>';
	else
		echo 'Erro<br>';
		
	if (multiplicar (5, 2) == 5 * 2 )
		echo 'OK<br>';
	else
		echo 'Erro<br>';
		
	if (somar (5, multiplicar (2, 3)) == 5 + 3 * 2  )
		echo 'OK<br>';
	else
		echo 'Erro<br>';
		
	if (somar (5, multiplicar (2, 3)) == 5 + 2 * 3 )
		echo 'OK<br>';
	else
		echo 'Erro<br>';
		
	if (somar (subtrair (8, 3), 5) == 8 - 3 + 5 )
		echo 'OK<br>';
	else
		echo 'Erro<br>';

	if (somar (9, dividir (9, 3), multiplicar (4, 2)) == 9 /3 + 4 * 2))
		echo 'OK<br>';
	else
		echo 'Erro<br>';
	echo '9 / 3 + 4 * 2 = ' . somar (dividir (9, 3), multiplicar (4, 2)) . '<br>';
?></pre>