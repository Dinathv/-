<!DOCTYPE html>
<html>
<head>
	<title>TODO-лист</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Вход</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Логин</label>
     	<input type="text" name="uname" placeholder="Введите логин"><br>

     	<label>Пароль</label>
     	<input type="password" name="password" placeholder="Введите пароль"><br>

     	<button type="submit">Вход</button>
          <a href="signup.php" class="ca">Создать аккаунт</a>
     </form>
</body>
</html>
