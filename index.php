<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<meta charset="utf-8">
		<link rel=stylesheet href=style.css>
</head>
	<body>
<?php
		//---------Подключение к БД------------------//
		$connect = mysql_connect('localhost', 'idris070', '464636zop');
		mysql_select_db ("game",$connect);
		//---------Атака--------------//
		if ($_GET[action]==battle){
			$m = time();
			$m = $m * 1000;
			$strSQL = "INSERT INTO movement (`start-time`, `start-x`, `start-y`, `end-x`, `end-y`) VALUES ('$m','44','42','157','79')";
			$rs = mysql_query($strSQL);
		}
		// присвоение к переменной $base данные деревни
		$strSQL = "SELECT * FROM map WHERE id=$_GET[base]";
		$rs = mysql_query($strSQL);
		$base = mysql_fetch_array($rs);
		//--------Подключение к ресурсам--------//
		$strSQL_res = "SELECT * FROM resourse WHERE id=$_GET[base]";
		$rs_res = mysql_query($strSQL_res);
		$base_res = mysql_fetch_array($rs_res);
		//------Присвоение бд к переменым------//
		$i=1;
		$strSQL_color = "SELECT * FROM map";
		$rs_color = mysql_query($strSQL_color);
		while($row = mysql_fetch_array($rs_color)){
			$color[$i]=$row[player];
			$warrior[$i]=$row[warrior];
			$i++;
		}
		//-------------------------------------------//
		include "warrior.php"; // прибавление войск
		if (isset($_POST[battle])) include 'battle.php'; // подключение к battle.php
		//-------------------------------------------//
		include 'map.php'; // загрузка карты
		//include 'movement.php'; // движение войск
		//-------------------------------------------//
		$edit = file_get_contents('style.css');
		$file = 'style.css';
		// Пишем содержимое обратно в файл
		if (isset($_POST[file_put])){
		file_put_contents($file, $_POST[comment]);
		}
 ?>


  <script>
    train.onclick = function() {
      var start = Date.now(); // сохранить время начала
      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;
		  var x = 437 ;
	  	var y = 574 ;
		train.style.top = 167 + timePassed / 3000 * (x/10 - 167/10) + 'px';
		train.style.left = 192 + timePassed / 3000 * (y/10 - 192/10) + 'px';

        if (timePassed > 30000) {clearInterval(timer); location.reload();}

      }, 20);
    }

  </script>

</body>
</html>
