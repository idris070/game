<?php
for ($i=1; $i < 16; $i++) {
$rs = mysql_query("SELECT * FROM map WHERE id=$i");
$warrior_time = mysql_fetch_array($rs);
$warrior_add = time() - $warrior_time[warrior_time];
$warrior_add = floor($warrior_add/10);
mysql_query("UPDATE map SET warrior=warrior+$warrior_add WHERE id=$i");
mysql_query("UPDATE map SET warrior_time=warrior_time+$warrior_add*10 WHERE id=$i");
}
 ?>
