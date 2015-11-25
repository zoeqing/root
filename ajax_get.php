<html>

<body>
<input type="text" id="min"><br>
<input type="text" id="max"><br>
<button type="button" onClick="showBook()">Click Me!</button>
<br>
<br>
<div id="txtHint"><b>Results:</b></div>

<script>
function showBook() {
	var min = document.getElementById("min").value;
  	var max = document.getElementById("max").value;

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
  xmlhttp.open("GET","ajax_getdb.php?min="+min+"&max="+max,true);
  xmlhttp.send();
}
</script>

</body>
</html>



