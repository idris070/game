function ajax(get) {
    var select_base = document.getElementsByTagName("select")[0];
  for (var i = 0; i < select_base.length; i++) {
    if (select_base[i].selected){
      attacked_base = select_base[i].innerHTML;
    }
  }
  xml = new XMLHttpRequest();
  xml.open("GET","ajax.php?"+get,true);
  xml.onreadystatechange=function(){
    if (xml.readyState==4 && xml.status==200){
      document.getElementById('movement').innerHTML = xml.responseText;
      var d = xml.responseText;
      alert ("hello");
      //document.getElementById('map').innerHTML = document.getElementById('map').innerHTML+"<img id=train"+d+" class='m1' src='img/army.png' height='32' width='32' style='margin: 10px;position: absolute;left:44px; top:42px;'>"
      var start = Date.now(); // сохранить время начала
      var timer = setInterval(function() {
        // вычислить сколько времени прошло из opts.duration
        var timePassed = Date.now() - start;
        document.getElementsByClassName('nav_panel')[1].innerHTML = Date.now();
      var x = 437 ;
      var y = 574 ;
  //  document.getElementById("train"+d).style.left = 44 + timePassed / 3000 * (y/10 - 44/10) + 'px';
  //  document.getElementById("train"+d).style.top = 42 + timePassed / 3000 * (x/10 - 42/10) + 'px';
        if (timePassed > 30000) {clearInterval(timer);document.getElementById("train"+d).style.display = 'none';}
      }, 20);
    }
  }
  xml.send(null);
}
