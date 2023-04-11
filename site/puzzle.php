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

<div class="contentWrap">
	<div class="content">
		<div class="center">
			
			<h1>Игра в загадки</h1>
			<div class="box">

		<?php
		if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

			$userAnswer = $_GET["userAnswer1"];	
			$score = 0;
			if($userAnswer == "фонтан" || $userAnswer == "родник"){
				$score++;
		}	
			$userAnswer = $_GET["userAnswer2"];	
			if($userAnswer == "яма"){
				$score++;
		}	
			$userAnswer = $_GET["userAnswer3"];	
			if($userAnswer == "шахматист"){
				$score++;
		}	
			echo "Вы угадали " . $score . " загадок";

			}

		?>
		<form method="GET">	
			<p>Странный дождь порой идет, сотней струй он кверху бьет.</p>
			<input type="text" name = "userAnswer1">
			<p>Чем больше из неё берёшь, тем больше она становится.</p>
			<input type="text" name = "userAnswer2">
			<p>Кто может поднять и передвинуть и коня, и слона?</p>
			<input type="text" name= "userAnswer3">
			<br>
			<input type="submit" value="Ответить" name="">

		</form>
			
		   </div>

		</div>
	</div>
</div>

	

<div class="footer">
	Copyright &copy; Ann Estrina
</div>


</body>
</html>