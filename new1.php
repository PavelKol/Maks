<?php
    if(isset($_POST['sub']))
    {
		$log = $_POST['login'];
		$pas = $_POST['password'];
		{
			echo "Ваш логин: $log</br>";
			echo "Ваш пароль: $pas";
		}
	}	
?>