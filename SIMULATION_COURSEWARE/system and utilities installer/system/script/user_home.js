			var cursor;var event_status;var st;var st2;
			var box_no_1=""; var box_no_2=""; var ins_status1; var ins_status2;
			var del1, del2;
			var pic_up_to2;var pic_up_to1;

			//ajax

			function showContent(str)
			{
			if (str=="")
			  {
			  document.getElementById("lecture-content").innerHTML="";
			  return;
			  } 
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
				document.getElementById("lecture-content").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","lecture.php?q="+str,true);
			xmlhttp.send();
			}
//------------------------------------------------------------------------------------/

				//select mushroom
			function simuMushroom(kind)
			{
			if (kind=="")
			  {
			  document.getElementById("lecture-content").innerHTML="";
			  return;
			  } 
				$('#selected-container').show();
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
				document.getElementById("hidden-mush-field").value = kind;
				document.getElementById("smc-cont").innerHTML=xmlhttp.responseText;
				}
			  }
			//  alert(kind);
			xmlhttp.open("GET","selected-mushroom.php?kind="+kind,true);
			xmlhttp.send();
			}

//------------------------------------------------------------------------------------/
			function checkBox(q)
			{//alert(q+", "+id);
			if (q=="null")
			  {
			  document.getElementById("box_noti").innerHTML="";
			  return;
			  } 

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
				document.getElementById("box_noti").innerHTML=xmlhttp.responseText;
				}
			  }
					
			xmlhttp.open("GET","check_box.php?val="+q,true);
			xmlhttp.send();
			}

			function checkTemp(val){
				aler(val);
				document.getElementById("temp_noti").innerHTML=val;
			}


//------------------------------------------------------------------------------------/

			//function setting of status on-going to harvested

			function changeStatus(q)
			{//alert(q+", "+id);
			if (q=="null")
			  {
			  return;
			  } 

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
				  //document.getElementById("img2").src = "../images/mushroom/start.jpg";
				}
			  }
			//document.getElementById("img2").src = "../images/mushroom/start.jpg";	
			xmlhttp.open("GET","change_status.php?box_no="+q,true);
			xmlhttp.send();
			}
//------------------------------------------------------------------------------------/

			function changeStatusDis(q)
			{//alert(q+", "+id);
			if (q=="null")
			  {
			  return;
			  } 

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
				}
			  }
					
			xmlhttp.open("GET","change_status_dis.php?box_no="+q,true);
			xmlhttp.send();
			}

//------------------------------------------------------------------------------------/

			function changeTemp(q)
			{//alert(q+", "+id);
			if (q=="null")
			  {
			  return;
			  } 

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
				}
			  }
					
			xmlhttp.open("GET","change_temp.php?box_no="+q,true);
			xmlhttp.send();
			}
//------------------------------------------------------------------------------------/
			function changeIns(q)
			{//alert(q+", "+id);
			if (q=="null")
			  {
			  return;
			  } 

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
				}
			  }
					
			xmlhttp.open("GET","change_ins.php?box_no="+q,true);
			xmlhttp.send();
			}
//------------------------------------------------------------------------------------/
			function changeSpanTemp(q)
			{//alert(q+", "+id);
				if(q==1){
				document.getElementById("span_temp1").innerHTML="<?php 	session_start(); echo $_SESSION['temper1']; ?>";
				}
				if(q==2){
				document.getElementById("span_temp2").innerHTML="<?php 	session_start(); echo $_SESSION['temper2']; ?>";
				}
			}

//------------------------------------------------------------------------------------/

			function changeCursor(cur){
				if(cur=="h"){
					document.getElementsByTagName("body")[0].style.cursor = "url('../images/icon/harvest-tool-cur.png'), auto";
					
				}
				if(cur=="d"){
					document.getElementsByTagName("body")[0].style.cursor = "url('../images/icon/dispose-cur.png'), auto";
					
				}
				if(cur=="w"){
					document.getElementsByTagName("body")[0].style.cursor = "url('../images/icon/water-cur.png'), auto";
					
				}
				if(cur=="i"){
					document.getElementsByTagName("body")[0].style.cursor = "url('../images/icon/insect-cur.png'), auto";
					
				}

				if(cur=="n"){
					document.getElementsByTagName("body")[0].style.cursor = "auto";
				}
				cursor=cur;
			}