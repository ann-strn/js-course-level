<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Анна Эстрина</i>. Я совсем недавно начала программировать, однако уже написала свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала: <br>
			<a href="puzzle.php">Загадки,</a>
			<a href="guess.php">Угадайка,</a>
			<a href="guess-2.html">Угадайка мультиплеер</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Ann Estrina
<div>


</body>
</html>