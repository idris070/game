<?php
$battle[start_position] = $_POST[base_st];
$battle[final_position] = $_POST[base];
$battle[start_player] = $color[$_POST[base_st]];
$battle[start_warrior] = $warrior[$battle[start_position]];
$battle[final_warrior] = $warrior[$battle[final_position]];
// уменьщение атакующих //
mysql_query("UPDATE map SET warrior=0 WHERE id=$battle[start_position]");
// Атакующих больше //
if ($battle[start_warrior] > $battle[final_warrior]) {
  $war_a = $battle[start_warrior] - $battle[final_warrior];
  mysql_query("UPDATE map SET player='$battle[start_player]' WHERE id=$battle[final_position]");
  mysql_query("UPDATE map SET warrior=$war_a WHERE id=$battle[final_position]");
}
// Защитников больше //
if ($battle[final_warrior] >= $battle[start_warrior]){
$war_d = $battle[final_warrior] - $battle[start_warrior];
mysql_query("UPDATE map SET warrior=$war_d WHERE id=$battle[final_position]");
}
 ?>
