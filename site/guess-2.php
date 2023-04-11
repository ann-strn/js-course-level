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
<script type="text/javascript">
	function guess2(){
	var answer = parseInt(Math.random() * 100);

	 	for(var tryCount = 1; tryCount <= Infinity; tryCount++){

	 	var userAnswer1 = +prompt("Игрок №1. Введите число:\nЕсли захотите прекратить игру, то введите любую букву(не число).");

	 		if(answer == userAnswer1){
				alert("Поздравляю!\nУгадал число.");
			}else if(userAnswer1 > answer){
				alert("Слишком большое число. ");
			}else if(userAnswer1 < answer) {
				alert("Слишком маленькое число.");
			} else if(isNaN(userAnswer1)){
					alert("Игра завершена, так как первый игрок вышел из игры");
				break;
				}


		var userAnswer2 = +prompt("Игрок №2. Введите число:\nЕсли захотите прекратить игру, то введите любую букву(не число).");

				if(answer == userAnswer2){

					alert("Поздравляю!\nУгадал число.");

					}else if(userAnswer2 > answer){

						alert("Слишком большое число. ");

							} else if(userAnswer2 < answer) {
					alert("Слишком маленькое число.");

				}else if(isNaN(userAnswer2)){
					alert("Игра завершена, так как второй игрок вышел из игры");
				break;
				}
				}

		}

</script>
			<div class="box">
	
			<p>В игре принимают участие 2 игрока.Попыток у каждого неограниченное количество.</p>
			<p>Игра идёт поочередно.</p>
			<p>Угадайте число от 0 до 100.</p>
			<a href="#" onclick="guess2();">Начать</a>
		
		   </div>

		</div>
	</div>
</div>

	

<div class="footer">
	Copyright &copy; Ann Estrina
</div>


</body>
</html>