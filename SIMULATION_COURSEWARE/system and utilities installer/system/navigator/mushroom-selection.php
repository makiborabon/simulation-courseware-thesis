				<script type="text/javascript" src="jquery.js"></script>
<script>
			mushroomSelected(mm)
			{alert("asdas");
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("menu-container").innerHTML=xmlhttp.responseText;
					 $('#selected-container').show();
				}
			  }
			xmlhttp.open("GET","a.php",true);
			xmlhttp.send();
			}
</script>
<?php

	echo "<abbr title=\"Plotorous Sajor-caju Mushroom\"><img src=\"../images/icon/sajor-cajo.png\" class=\"m-m\" onClick=\"mushroomSelected('sajor-caju');\"></abbr>";
	echo "<abbr title=\"Plotorous Florida Mushroom\"><img src=\"../images/icon/sajor-cajo.png\" class=\"m-m\" onClick=\"mushroomSelected('florida');\"></abbr>";
?>