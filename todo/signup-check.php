<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=Требуется логин&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Требуется пароль&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Требуется повтор пароля&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Требуется имя пользователя&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Пароль для подтверждения не совпадает&$user_data");
	    exit();
	}

	else{


        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Имя пользователя введено, попробуйте другое&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Ваша учетная запись успешно создана");
	         exit();
           }else {
	           	header("Location: signup.php?error=Произошла неизвестная ошибка&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
