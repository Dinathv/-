<!DOCTYPE html>
<html>
<head>
	<title>TODO-лист</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Регистрация</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Имя пользователя</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Имя пользователя"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Имя пользователя"><br>
          <?php }?>

          <label>Логин</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Логин"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Логин"><br>
          <?php }?>


     	<label>Пороль</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Придумайте пороль"><br>

          <label>Повторите пороль</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Повторите пороль"><br>

     	<button type="submit">Зарегистрироваться</button>
          <a href="index.php" class="ca">Есть аккаунт?</a>
     </form>
</body>
</html>