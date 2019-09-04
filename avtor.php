<html>
<head>
	<title>Авторизация</title>
</head>
<?php
	$mylogin = $_POST['login'];
	$mypassword = $_POST['password'];
	if(isset($_POST['but']))
	{
			echo "Ваш логин: $mylogin</br>";
			echo "Ваш пароль: $mypassword";
	}
	else
	{
		echo('
		<form action="" method="post">
		<p>Логин: <input type="text" required name="login"></br></p>
		<p>Пароль: <input type="password" required name="password"></br></p>
		<p><input type="submit" value="К знаниям PHP" name="but" ></p>
		</form>
		');
	}
?>
</html>