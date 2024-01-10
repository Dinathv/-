<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO-лист</title>
	<link rel="stylesheet" type="text/css" href="css.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"/>
</head>
<body>
<h1 style="text-align: center;">TODO-лист фильмов и сериалов</h1>
<a href="logout.php">Выход</a>
<div class="cont">

        <div class="column" id="planning">
          <h2>Планирует просмотр</h2>
          <div class="item" draggable="true"></div>
          <form>
          <input type="text" class="header__search" placeholder="Поиск" />
        </form>
          <div draggable="true" class="movies"></div>
          <!-- <div class="item" draggable="true">Фильм 1</div>
          <div class="item" draggable="true">Фильм 2</div>
          <div class="item" draggable="true">Фильм 3</div>
          <div class="item" draggable="true">Фильм 4</div>
          <div class="item" draggable="true">Фильм 5</div>
          <div class="item" draggable="true">Фильм 6</div> -->
        </div>
        <div class="column" id="watching">
          <h2>Просматривает</h2>
          <div draggable="true" class="movies"></div>
          <div class="item" draggable="true"></div>
          <div class="item" draggable="true">Фильм 34</div>
        </div>
        <div class="column" id="watched">
          <h2>Посмотрел</h2>
          <div draggable="true" class="movies"></div>
          <div class="item" draggable="true"></div>
          <div class="item" draggable="true">Фильм 55</div>
          <div class="item" draggable="true">Фильм 8</div>
        </div>

 
      </div>

     <script src="js.js"></script>
     <script src="app.js"></script>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>