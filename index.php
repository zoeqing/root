<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<p> Hello: </p>

<!--甲:崇拜的人 目:未来老婆或老公 田:没关系 白:最爱的人 电:暗恋者 申:讨厌的人 旧:普通朋友 由:不信赖的人 旦:喜欢的人.!-->

<form name="myForm" action=""> 
<select name="customers" id="customers" onchange="showAnswer(this.form)">
<option value="0" > select... </option>
<option value="1" > 甲 </option>
<option value="2" name="hello">目</option>
<option value="3">田</option>

</select>
</form>
<br>
<div id="txtHint">Answer...</div>

<script>
require_once __DIR__ . '/vendor/autoload.php';

function showAnswer(str) {
	var selIndex = myForm.customers.selectedIndex;
	//str is form element
	//alert(str);
	//check browser version, and create xmlhttp object
  if (window.XMLHttpRequest)
  {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else
  {
    // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  //Update text with Ajax
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","get_fb_lab.php?selIndex="+selIndex,true);
  xmlhttp.send();

}
</script>

</body>
</html>
