<?php 


var_dump($_POST);
echo '<br><br>';
echo ($_POST['nombre']);

echo '<br><br>';

foreach ($_POST as $key => $value) {
	echo "$key: $value <br>";
}
echo '<br><br>';

// foreach (getAllHeaders() as $key => $value) {
// 	echo $value . '<br>';
// }
// echo '<br><br>';

var_dump($GLOBALS);
?>

<!DOCTYPE HTML>
<html>
<body>
	<form action="imprimir.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	E-mail : <input type="text" name="email"><br>
	Como te enteraste de este sitio: <br> 
	Internet:
	<input type="checkbox" name="internet"><br>
	Un amigo:
	<input type="checkbox" name="amigo"><br>
	Radio:
	<input type="checkbox" name="radio"><br>
	Television:
	<input type="checkbox" name="television"><br><br>
	 <select name="carlist">
	  <option  value="volvo">Volvo</option>
	  <option value="saab">Saab</option>
	  <option  value="mercedes">Mercedes</option>
	  <option  value="audi">Audi</option>
	</select> <br><br>

	<input type="submit">
	</form>
</body>
</html>