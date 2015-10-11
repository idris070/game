 <?php  ?>
 <table id=game><div>
   <tr>
     <td class=nav style="background-image:url(img/nav.png);">
         <div class=nav_panel>30 <img src=img/coin.png width="16" height="16"></div>
         <div class=nav_panel>100% <img src=img/heart.png width="16" height="16"></div>
         <div class=nav_panel>1 <img src=img/star.png width="16" height="16"></div>
         <div class=nav_panel>0/10 <img src=img/xp.png width="16" height="16"></div>
     </td>
   </tr>

 </div>
   <td><div id=map>
       <div id=circle title="#base1" class="link_test" onclick="location.href='?base=1';" style="margin-top:42px; margin-left:44px;">
         <img src=img/<?php echo $color[1];?>.png width="52" height="52"></div>
       <div id=circle title="#base2" class="link_test" onclick="location.href='?base=2';" style="margin-top:79px; margin-left:157px;">
         <img src=img/<?php echo $color[2];?>.png width="52" height="52"></div>
       <div id=circle title="#base3" class="link_test" onclick="location.href='?base=3';" style="margin-top:140px; margin-left:83px;">
         <img src=img/<?php echo $color[3];?>.png width="52" height="52"></div>
       <div id=circle title="#base4" class="link_test" onclick="location.href='?base=4';" style="margin-top:77px; margin-left:311px;">
         <img src=img/<?php echo $color[4];?>.png width="52" height="52"></div>
       <div id=circle title="#base5" class="link_test" onclick="location.href='?base=5';" style="margin-top:167px; margin-left:192px;">
         <img src=img/<?php echo $color[5];?>.png width="52" height="52"></div>
       <div id=circle title="#base6" class="link_test" onclick="location.href='?base=6';" style="margin-top:251px; margin-left:105px;">
         <img src=img/<?php echo $color[6];?>.png width="52" height="52"></div>
       <div id=circle title="#base7" class="link_test" onclick="location.href='?base=7';" style="margin-top:180px; margin-left:487px;">
         <img src=img/<?php echo $color[7];?>.png width="52" height="52"></div>
       <div id=circle title="#base8" class="link_test" onclick="location.href='?base=8';" style="margin-top:294px; margin-left:413px;">
         <img src=img/<?php echo $color[8];?>.png width="52" height="52"></div>
       <div id=circle title="#base9" class="link_test" onclick="location.href='?base=9';" style="margin-top:358px; margin-left:282px;">
         <img src=img/<?php echo $color[9];?>.png width="52" height="52"></div>
       <div id=circle title="#base10" class="link_test" onclick="location.href='?base=10';" style="margin-top:401px; margin-left:452px;">
         <img src=img/<?php echo $color[10];?>.png width="52" height="52"></div>
       <div id=circle title="#base11" class="link_test" onclick="location.href='?base=11';" style="margin-top:333px; margin-left:532px;">
         <img src=img/<?php echo $color[11];?>.png width="52" height="52"></div>
       <div id=circle title="#base12" class="link_test" onclick="location.href='?base=12';" style="margin-top:437px; margin-left:574px;">
         <img src=img/<?php echo $color[12];?>.png width="52" height="52"></div>
       <div id=circle title="#base13" class="link_test" onclick="location.href='?base=13';" style="margin-top:41px; margin-left:573px;">
         <img src=img/<?php echo $color[13];?>.png width="52" height="52"></div>
       <div id=circle title="#base14" class="link_test" onclick="location.href='?base=14';" style="margin-top:427px; margin-left:51px;">
         <img src=img/<?php echo $color[14];?>.png width="52" height="52"></div>
      <div id=movement>
         <script type="text/javascript">
           
         </script>
      </div>
    <?php
    include "movement.php";
    ?>
</div></td>
 <td><div id=info>
<pre>
<?php
echo "<div class=info_base>base$_GET[base]</div>";
print_r ($battle);
?>
</pre>
<form action="<?php echo "?base=$_GET[base]&action=battle"?>" method=POST>
 <input type=submit name=battle>
 <button type="button" onclick="ajax('id=1')" name="button">Test</button>
 <?php echo  "<input type=hidden name=base_st value=$_GET[base]>" ?>
 <select class="default" onchange="this.className=this.value" name=base>
   <?php
   $ptn = $_GET[base];
if($ptn==2 or $ptn==3 ) echo "<option style='color:$color[1]' value=1>base1</option>";
if($ptn==1 or $ptn==3 or $ptn==4 or $ptn==5) echo "<option style='color:$color[2]' value=2>base2</option>";
if($ptn==1 or $ptn==2 or $ptn==5 or $ptn==6) echo "<option style='color:$color[3]' value=3>base3</option>";
if($ptn==2 or $ptn==5 or $ptn==7 or $ptn==13) echo "<option style='color:$color[4]' value=4>base4</option>";
if($ptn==2 or $ptn==3 or $ptn==4 or $ptn==6) echo "<option style='color:$color[5]' value=5>base5</option>";
if($ptn==3 or $ptn==5 or $ptn==9 or $ptn==14) echo "<option style='color:$color[6]' value=6>base6</option>";
if($ptn==4 or $ptn==8 or $ptn==11 or $ptn==13) echo "<option style='color:$color[7]' value=7>base7</option>";
if($ptn==7 or $ptn==9 or $ptn==10 or $ptn==11) echo "<option style='color:$color[8]' value=8>base8</option>";
if($ptn==6 or $ptn==8 or $ptn==10 or $ptn==14) echo "<option style='color:$color[9]' value=9>base9</option>";
if($ptn==8 or $ptn==9 or $ptn==11 or $ptn==12) echo "<option style='color:$color[10]' value=10>base10</option>";
if($ptn==7 or $ptn==8 or $ptn==10 or $ptn==12) echo "<option style='color:$color[11]' value=11>base11</option>";
if($ptn==11 or $ptn==10) echo "<option style='color:$color[12]' value=12>base12</option>";
if($ptn==7 or $ptn==4) echo "<option style='color:$color[13]' value=13>base13</option>";
if($ptn==6 or $ptn==9) echo "<option style='color:$color[14]' value=14>base14</option>";
  ?>
   </select>
</form>
 <table border="	" style="margin-left:5%;" width="90%">
      <tr><td><img style="margin-left:5px;" src=img/war1.png width="20" height="20"></td><td><?php echo $base[warrior]; ?></td><td> Warrior </td></tr>
   </div></td>
 </table>
</table>

 <div style="color:<?php echo $color[1];?>;"id="base1" class="title"><div class=""></div> base1<br> <?php// echo $warrior[1];?></div>
 <div style="color:<?php echo $color[2];?>;"id="base2" class="title"><div class=""></div> base2<br> <?php// echo $warrior[2];?></div>
 <div style="color:<?php echo $color[3];?>;"id="base3" class="title"><div class=""></div> base3<br> <?php// echo $warrior[3];?></div>
 <div style="color:<?php echo $color[4];?>;"id="base4" class="title"><div class=""></div> base4<br> <?php// echo $warrior[4];?></div>
 <div style="color:<?php echo $color[6];?>;"id="base5" class="title"><div class=""></div> base5<br> <?php// echo $warrior[5];?></div>
 <div style="color:<?php echo $color[5];?>;"id="base6" class="title"><div class=""></div> base6<br> <?php// echo $warrior[6];?></div>
 <div style="color:<?php echo $color[7];?>;"id="base7" class="title"><div class=""></div> base7<br> <?php// echo $warrior[7];?></div>
 <div style="color:<?php echo $color[8];?>;"id="base8" class="title"><div class=""></div> base8<br> <?php// echo $warrior[8];?></div>
 <div style="color:<?php echo $color[9];?>;"id="base9" class="title"><div class=""></div> base9<br> <?php// echo $warrior[9];?></div>
 <div style="color:<?php echo $color[10];?>;"id="base10" class="title"><div class=""></div> base10<br> <?php// echo $warrior[10];?></div>
 <div style="color:<?php echo $color[11];?>;"id="base11" class="title"><div class=""></div> base11<br> <?php// echo $warrior[11];?></div>
 <div style="color:<?php echo $color[12];?>;"id="base12" class="title"><div class=""></div> base12<br> <?php// echo $warrior[12];?></div>
 <div style="color:<?php echo $color[13];?>;"id="base13" class="title"><div class=""></div> base13<br> <?php// echo $warrior[13];?></div>
 <div style="color:<?php echo $color[14];?>;"id="base14" class="title"><div class=""></div> base14<br> <?php// echo $warrior[14];?></div>
