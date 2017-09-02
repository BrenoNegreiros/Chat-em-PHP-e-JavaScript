<?php
?>

<head>

<title>Chat Sistemas Distribuidos</title>

<link rel = "stylesheet" href ="estilo.css"/>
</head>
<script src="https://code.jquery.com/jquery-1.9.0.js"></script>



<script>
function submitChat(){
	

 if(form1.uname.value == '' || form1.msg.value == '' ){
  alert('Todos os campos são obrigatorios!!!!');
  return;
 }
 form1.uname.readOnly = true;
 form1.uname.style.border = 'none';
 var uname = form1.uname.value;
 var msg = form1.msg.value;
 var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
 
           }
	document.getElementById('1').value = "";	   
 
 }
 
 xmlhttp.open('GET','insert.php?uname='+"("+uname+ ") : "+'&msg='+msg, true);
 xmlhttp.send();
 
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');}, 2000);
});
</script>

<div class="wrapper">
    <div class="test">

<form name = "form1">
<h2>NOME:</h2> 
<input type="text" name="uname" style="width:180px;" /><br/>
<h2>MENSAGEM: </h2>
<textarea  id="1" name="msg"  styles = "width:180px; height: 120px"></textarea><br />
</br>
<a href= "#" onclick= "submitChat()"class= "button">Enviar</a><br /><br />


<div  id="chatlogs"> 
<img src="loading.gif"width=125>

</div>
</div>
  </div>
</body>