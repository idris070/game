<?php
  $i=1;
  $strSQL_color = "SELECT * FROM movement";
  $rs_color = mysql_query($strSQL_color);
  while($row = mysql_fetch_array($rs_color)){
    $start_time[$i] =$row['start-time'];
    $start_x[$i] = $row['start-x'];
    $start_y[$i] = $row['start-y'];
    $end_x[$i] = $row['end-x'];
    $end_y[$i] = $row['end-y'];
    $time = time()*1000-30000;
    $m = microtime(true);
    $m = round($m,3);
    $m = str_replace('.', '', $m); //удалить
    if ($start_time[$i]>$time){

    echo "<img id='train$row[0]' class='m$row[0]' src='img/army.png' height='32' width='32' style='margin: 10px;position: absolute;left:$start_x[$i]px; top:$start_y[$i]px;'>
  <script>
      var start$i = $start_time[$i]; // сохранить время начала
      var timer$row[0] = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start$i;
        document.getElementsByClassName('nav_panel')[1].innerHTML = Date.now();
      var x = 437 ;
      var y = 574 ;
    train$row[0].style.left = $start_x[$i] + timePassed / 3000 * (y/10 - $start_x[$i]/10) + 'px';
    train$row[0].style.top = $start_y[$i] + timePassed / 3000 * (x/10 - $start_y[$i]/10) + 'px';
        if (timePassed > 30000) {clearInterval(timer$row[0]);train$row[0].style.display = 'none';}
      }, 20);

  </script>
    ";
    $i++;
    }
    else {
      mysql_query ("DELETE FROM movement WHERE id=$row[0]");
    }
    }
echo time()*1000;
echo "
<script type='text/javascript'>
  var time = new Date(milliseconds);
  alert (time);
</script>";
 ?>
