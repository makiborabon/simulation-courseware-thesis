
<?php
	session_start();
	date_default_timezone_set("Asia/Manila");
	$temperature1="0";
	$temperature2="0";
	$time1="00:00:00";
	$time2="00:00:00";
	$show_img="";
	$show_img2="";
	$box_no_1="";
	$box_no_2="";

	$status1="";
	$status2="";

	$current_time=date(" h:i:s A ");
?>
<html>
	<head>
   <script>
      window.dhx_globalImgPath="../codebase/imgs/";
   </script>
	<script type="text/javascript" src="../script/user_home.js"></script>
	<script type="text/javascript" src="time.js"></script>
	<script  src="../codebase/dhtmlxcommon.js"></script>
	<script  src="../codebase/dhtmlxslider.js"></script>
	<script  src="../codebase/ext/dhtmlxslider_start.js"></script>
	<link rel="STYLESHEET" type="text/css" href="../codebase/dhtmlxslider.css">

				<script type="text/javascript" src="jquery.js"></script>
				<link rel = "stylesheet" href = "../styles/user-home-style.css" type = "text/css"/>

		<style>
				#img1{
					position:relative;
					width:99.8%;
					height:99.8%;
				}
				#img2{
					position:relative;
					width:99.8%;
					height:99.8%;
				}
		</style>
		<script>

						var age2; var age;

			$(document).ready(function(){

			$('#lecture-main').hide();
			  $('#lecture').click(function(){
			    $('#lecture-main').show();
			  });
			  $('#back-to-simu').click(function(){
				$('#lecture-main').hide();
				});


			//$('#mushroom-menu-container').hide();
			  $('#select-m').click(function(){
				 document.getElementsByTagName("body")[0].style.cursor = "auto";
				$('#tools-menu-container').hide();
			    $('#mushroom-menu-container').show();
			  });

			$('#tools-menu-container').hide();
			  $('#tool-m').click(function(){
			    $('#mushroom-menu-container').hide();
			    $('#tools-menu-container').show();

			  });

			  $('#close-mush-info').click(function(){
			   
			    $('#selected-container').hide();

				

			  });

			  $('#box-1').click(function(){
					if(box_no_1!=""){
						if(cursor=="h"){
							event_status="har";
							document.getElementById("img1").src = "../images/mushroom/har.jpg";

							//alert("box no"+box_no_1);
							changeStatus(box_no_1);
							//alert(cursor+" "+event_status);
						}

						if(cursor=="d"){
							event_status="dis";
							del1="dis";
							
							//alert("box no"+box_no_1);
							changeStatusDis(box_no_1);
							//alert(cursor+" "+event_status);
							ins_status1="Insect Status: None";
							document.getElementById("status-cont-insect1").innerHTML=ins_status1;
							document.getElementById("img1").src = "../images/mushroom/start.jpg";
							$('#box-1-status').css('backgroundImage', 'url(../images/icon/w.png)');
							

						}
						if(cursor=="w"){
							event_status="dis";
							changeTemp(box_no_1);
							
							
						}
					
						if(cursor=="i"){
							changeIns(box_no_1);
							ins_status1="Insect Status: Pest attack! Dispose <img src=\"../images/icon/dispose-cur.png\" />";
							document.getElementById("status-cont-insect1").innerHTML=ins_status1;
		
							$('#box-1-status').css('backgroundImage', 'url(../images/icon/r.png)');
						
						}
					}
			  });
			  
			  $('#box-2').click(function(){
					if(box_no_2!=""){
						if(cursor=="h"){
							event_status="har";
							document.getElementById("img2").src = "../images/mushroom/har.jpg";
							changeStatus(box_no_2);
							//alert(cursor+" "+event_status);
						}

						if(cursor=="d"){
							event_status="dis";
							document.getElementById("img2").src = "../images/mushroom/start.jpg";

							//alert("box no"+box_no_1);
							changeStatusDis(box_no_2);
							//alert(cursor+" "+event_status);
							ins_status2="Insect Status: None";
							document.getElementById("status-cont-insect2").innerHTML=ins_status2;
							$('#box-2-status').css('backgroundImage', 'url(../images/icon/w.png)');
							
						
						}

						if(cursor=="w"){
							event_status="dis";
							changeTemp(box_no_2);
						}
						if(cursor=="i"){
							changeIns(box_no_2);
							ins_status2="Insect Status: Pest attack! Dispose <img src=\"../images/icon/dispose-cur.png\" />";
							document.getElementById("status-cont-insect2").innerHTML=ins_status2;

							$('#box-2-status').css('backgroundImage', 'url(../images/icon/r.png)');
		
						}
					}
			  });			

			});
		</script>
	<?php

	$user_identifier=$_SESSION['user_id'];
	include("../includes/connection.php");
	$sql = "SELECT * FROM user_mushrooms WHERE user_id='$user_identifier' LIMIT 1";

	$result = mysql_query($sql) or die(mysql_error());
	 while ($row = mysql_fetch_array($result)) {

			$date_planted=$row['date'];
			$time_planted=$row['time'];
			
			$box_no_1=$row['box'];
			$status1=$row['status'];
			
			

			$diff=date_diff(date_create($current_time),date_create($time_planted));
			$new_age=$diff->format(' %i ');
			$new_age_h=$diff->format(' %h ');


			if($new_age>=24){
				$new_age="23";
			}
			if($new_age_h>=1){
				$new_age="23";
			}


			 
		 ?>
		
	 <script type = "text/javascript">
	//	alert("<?php echo $current_time.' '.$time_planted.' '.$diff->format(' %i '); ?>");
	//	alert("<?php echo $new_age; ?>");

		box_no_1="<?php echo $box_no_1; ?>";
		var myVar; //alert("<?php echo $user_identifier; ?>");

		var trans2="<?php echo $row['trans_time']; ?>";



			age2=parseInt("<?php echo $new_age; ?>");

	

          function displayImage2(image2) {

              document.getElementById("<?php if($row['box']=='1'){echo 'img1'; $show_img='img1'; $temperature1 = $row['temp'];$time1 = $row['time'];	 } if($row['box']=='2'){echo 'img2';  $show_img='img2'; $temperature2 = $row['temp'];$time2 = $row['time'];	 } ?>").src = image2;
//document.getElementById("<?php if($row['box']=='1'){echo 'box-1';} if($row['box']=='2'){echo 'box2';} ?>").innerHTML = image;


		if(trans2=="cold_damage"){
			              document.getElementById("<?php if($row['box']=='1'){echo 'img1'; $show_img='img1'; $temperature1 = $row['temp'];$time1 = $row['time'];	 } if($row['box']=='2'){echo 'img2';  $show_img='img2'; $temperature2 = $row['temp'];$time2 = $row['time'];	 } ?>").src = "../images/mushroom/cold.jpg";


				
				if(box_no_1=="1"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too cold temperature. Dispose";
				}
				if(box_no_1=="2"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too cold temperature. Dispose";
				}

							return;


		}
		if(trans2=="hot_damage"){

			              document.getElementById("<?php if($row['box']=='1'){echo 'img1'; $show_img='img1'; $temperature1 = $row['temp'];$time1 = $row['time'];	 } if($row['box']=='2'){echo 'img2';  $show_img='img2'; $temperature2 = $row['temp'];$time2 = $row['time'];	 } ?>").src = "../images/mushroom/hot.jpg";


				if(box_no_1=="1"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too hot temperature. Dispose";
						document.getElementById("status-cont-dessease1").innerHTML="Dessease Status: Green mold identify. Dispose";


				
				}
				if(box_no_1=="2"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too hot temperature. Dispose";
						document.getElementById("status-cont-dessease2").innerHTML="Dessease Status: Green mold identify. Dispose";

				}

							return;
			
		}

				
				
				if(box_no_1=="1" && x2 <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_1=="1" && x2 >= 14 && x2<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_1=="1" && x2 >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too old to harvest considered to be disposed. <img src=\"../images/icon/dispose-cur.png\" />";
						$('#box-1-status').css('backgroundImage', 'url(../images/icon/r.png)');
				}

				if(box_no_1=="2" && x2 <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_1=="2" && x2 >= 14 && x2<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_1=="2" && x2 >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too old to harvaest considered to be disposed <img src=\"../images/icon/dispose-cur.png\" />";
						$('#box-2-status').css('backgroundImage', 'url(../images/icon/r.png)');
				}		  
		  
		  } 
		  function wImage2(image2) {
             // document.getElementById("pic").value = image2;
          }

          function displayNextImage2() {//alert(event_status);

              x2 = (x2 == images.length - 1) ? 23 : x2 + 1;
              displayImage2(images[x2]);
			  wImage2(images[x2]);        

		  
		  
		  }

          function startTimer2() {

              setInterval(displayNextImage2(), trans2);
			  //myVar=setTimeout(function(){displayNextImage2},3000);

				if(box_no_1=="1" && x2 <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_1=="1" && x2 >= 14 && x2<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_1=="1" && x2 >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too old to harvaest considered to be disposed <img src=\"../images/icon/dispose-cur.png\" />";
						$('#box-1-status').css('backgroundImage', 'url(../images/icon/r.png)');
				}

				if(box_no_1=="2" && x2 <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_1=="2" && x2 >= 14 && x2<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_1=="2" && x2 >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too old to harvaest considered to be disposed <img src=\"../images/icon/dispose-cur.png\" />";
						$('#box-2-status').css('backgroundImage', 'url(../images/icon/r.png)');
				}



				
		  }
			  if(event_status=="har"){ alert(event_status); 
					document.getElementById("img1").src = "../images/mushroom/har.jpg";
				  return;
				  }



          var images = [], x2 = age2;

		images[0] = "../images/mushroom/msc-1.png"; images[1] = "../images/mushroom/msc-2.png";
		images[2] = "../images/mushroom/msc-3.png"; images[3] = "../images/mushroom/msc-4.png";
		images[4] = "../images/mushroom/msc-5.png"; images[5] = "../images/mushroom/msc-6.png";
		images[6] = "../images/mushroom/msc-7.png"; images[7] = "../images/mushroom/msc-8.png";
		images[8] = "../images/mushroom/msc-9.png"; images[9] = "../images/mushroom/msc-10.png";
		images[10] = "../images/mushroom/msc-11.png"; images[11] = "../images/mushroom/msc-12.png";
		images[12] = "../images/mushroom/msc-13.png"; images[13] = "../images/mushroom/msc-14.png";
		images[14] = "../images/mushroom/msc-15.png"; images[15] = "../images/mushroom/msc-16.png";
		images[16] = "../images/mushroom/msc-17.png"; images[17] = "../images/mushroom/msc-18.png";
		images[18] = "../images/mushroom/msc-19.png"; images[19] = "../images/mushroom/msc-20.png";
		images[20] = "../images/mushroom/msc-21.png"; images[21] = "../images/mushroom/msc-22.png";
		images[22] = "../images/mushroom/msc-23.png"; images[23] = "../images/mushroom/msc-24.png";
      </script>
	<?php 
	
	  
	  }?>

	<?php

	$user_identifier=$_SESSION['user_id'];
	include("../includes/connection.php");
	$sql = "SELECT * FROM user_mushrooms WHERE user_id='$user_identifier' LIMIT 2";

	$result = mysql_query($sql) or die(mysql_error());
	 while ($row = mysql_fetch_array($result)) {

			$date_planted2=$row['date'];
			$time_planted2=$row['time'];

			$box_no_2=$row['box'];
			$status2=$row['status'];

			$diff2=date_diff(date_create($current_time),date_create($time_planted2));
			$new_age2=$diff2->format(' %i ');
			$new_age2_h=$diff2->format(' %h ');
			 
			if($new_age2>=24){
				$new_age2="23";
			}
			if($new_age2_h>=1){
				$new_age2="23";
			}
		 ?>
		
	 <script type = "text/javascript">

		box_no_2="<?php echo $box_no_2; ?>";
		//alert("<?php echo 'new age 2'.$new_age2; ?>");alert("<?php  echo "box ".$row['box']; ?>");
		var trans="<?php echo $row['trans_time']; ?>";
			age=parseInt("<?php echo $new_age2; ?>");
			
          function displayImage(image) {
              document.getElementById("<?php if($row['box']=='1'){echo 'img1';  $show_img2='img1';  $temperature1 = $row['temp'];$time1 = $row['time'];	 } if($row['box']=='2'){echo 'img2';  $show_img2='img2';  $temperature2 = $row['temp'];$time2 = $row['time'];	 } ?>").src = image;
 


		if(trans=="cold_damage"){
			              document.getElementById("<?php if($row['box']=='1'){echo 'img1'; $show_img='img1'; $temperature1 = $row['temp'];$time1 = $row['time'];	 } if($row['box']=='2'){echo 'img2';  $show_img='img2'; $temperature2 = $row['temp'];$time2 = $row['time'];	 } ?>").src = "../images/mushroom/cold.jpg";

				if(box_no_2=="1"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too cold temperature. Dispose";
				}
				if(box_no_2=="2"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too cold temperature. Dispose";
				}

							return;


		}
		if(trans=="hot_damage"){

			              document.getElementById("<?php if($row['box']=='1'){echo 'img1'; $show_img='img1'; $temperature1 = $row['temp'];$time1 = $row['time'];	 } if($row['box']=='2'){echo 'img2';  $show_img='img2'; $temperature2 = $row['temp'];$time2 = $row['time'];	 } ?>").src = "../images/mushroom/hot.jpg";


				if(box_no_2=="1"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too hot temperature. Dispose";
						document.getElementById("status-cont-dessease1").innerHTML="Dessease Status: Green mold identify. Dispose";

				}
				if(box_no_2=="2"){//alert(box_no_1+x2);

						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too hot temperature. Dispose";
						document.getElementById("status-cont-dessease2").innerHTML="Dessease Status: Green mold identify. Dispose";

				}

							return;
			
		}

				



				if(box_no_2=="1" && x <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_2=="1" && x >= 14 && x<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_2=="1" && x >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Too old to harvest (disposed) <img src=\"../images/icon/dispose-cur.png\" />";
				}

				if(box_no_2=="2" && x <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_2=="2" && x >= 14 && x<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_2=="2" && x >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too old to harvest (disposed) <img src=\"../images/icon/dispose-cur.png\" />";
				}			  
		  } 
		  function wImage(image) {
              //document.getElementById("pic").value = image;
          }

          function displayNextImage() {

			  if(event_status=="har"){  
					document.getElementById("img1").src = "../images/mushroom/har.jpg";
				  return;
				  } 	
			  if(st=="stop"){  
					
				  return;
				  } 	

              x = (x == images.length - 1) ? 23 : x + 1;
              displayImage(images[x]);
			  wImage(images[x]);           
          }

          function startTimer() {
              setInterval(displayNextImage, trans);
				if(box_no_2=="1" && x <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_2=="1" && x >= 14 && x<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_2=="1" && x >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status1").innerHTML="Progress Status:  Too old to harvest (disposed) <img src=\"../images/icon/dispose-cur.png\" />";
				}

				if(box_no_2=="2" && x <= 13){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Not yet ready to harvest.";
				}
				if(box_no_2=="2" && x >= 14 && x<=16){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Ready to harvest. Use the harvest tool. <img src=\"../images/icon/harvest-tool-cur.png\" />";
				}
				if(box_no_2=="2" && x >= 17){//alert(box_no_1+x2);
						document.getElementById("status-cont-status2").innerHTML="Progress Status: Too old to harvest (disposed) <img src=\"../images/icon/dispose-cur.png\" />";
				}	

          }

          var images = [], x = age;
				//alert(x);

		images[0] = "../images/mushroom/msc-1.png"; images[1] = "../images/mushroom/msc-2.png";
		images[2] = "../images/mushroom/msc-3.png"; images[3] = "../images/mushroom/msc-4.png";
		images[4] = "../images/mushroom/msc-5.png"; images[5] = "../images/mushroom/msc-6.png";
		images[6] = "../images/mushroom/msc-7.png"; images[7] = "../images/mushroom/msc-8.png";
		images[8] = "../images/mushroom/msc-9.png"; images[9] = "../images/mushroom/msc-10.png";
		images[10] = "../images/mushroom/msc-11.png"; images[11] = "../images/mushroom/msc-12.png";
		images[12] = "../images/mushroom/msc-13.png"; images[13] = "../images/mushroom/msc-14.png";
		images[14] = "../images/mushroom/msc-15.png"; images[15] = "../images/mushroom/msc-16.png";
		images[16] = "../images/mushroom/msc-17.png"; images[17] = "../images/mushroom/msc-18.png";
		images[18] = "../images/mushroom/msc-19.png"; images[19] = "../images/mushroom/msc-20.png";
		images[20] = "../images/mushroom/msc-21.png"; images[21] = "../images/mushroom/msc-22.png";
		images[22] = "../images/mushroom/msc-23.png"; images[23] = "../images/mushroom/msc-24.png";


      </script>
	<?php
		  
	

	  }?>


	</head>
	<body onload = "startTimer2();startTimer();" >
		<div id = "main">
			<div id="time-cont"><div id="times"><script><!--
														myClock_Counter();
														--></script>
			</div></div>
			<div id="middle-container"></div>
			<div id="box1-img"></div>
			<div id="left-container">
				<div id="navi">

					
					<ul>
						<li><a href="#" style="padding-right:50px;" ></a></li>
						<li><a href="#" id="lecture">Lecture</a></li>
						<li><a href="#" id="quiz" onClick="window.open('user-quiz.php');">Quiz</a></li>
						<li><a href="#" onClick="window.open('../gl/images/guide/userguide.php');">Help?</a></li>
						<li><a href="log-out.php">Sign-out</a></li>

					</ul>
				</div>
				<div id="user_name"><span style="font-size:18pt;"><span style="font-size:25pt;">WELCOME</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['name']; ?></span></div>
				<div id="menu">
					<!-- <div id="tool-m"></div>	
					<div id="select-m"></div>-->

				</div>
				<div id="tools-menu-container">

					<div class="mushroom-menu-selection">				
						<img src="../images/icon/n_cur.cur" onClick="changeCursor('n');"><br />
						<span>Regular cursor</span>
					</div>
					<div class="mushroom-menu-selection">
						<img src="../images/icon/harvest-tool.png" onClick="changeCursor('h');"><br />
						<span>Harvest</span>
					</div>
					<div class="mushroom-menu-selection">
						<img src="../images/icon/dispose.png" onClick="changeCursor('d');"><br />
						<span>Dispose</span>
					</div>

					<div class="mushroom-menu-selection">
						<img src="../images/icon/water.png" onClick="changeCursor('w');"><br />
						<span>Water</span>
					</div>
					<div class="mushroom-menu-selection">
						<img src="../images/icon/insect.png" onClick="changeCursor('i');"><br />
						<span>Insect</span>
					</div>

				</div>
				<div id="mushroom-menu-container">
					<div class="mushroom-menu-selection">
						<abbr title="Plotorous Sajor-caju Mushroom"><img src="../images/icon/sajor-cajo2.png" class="m-m" onClick="simuMushroom(11);" /></abbr><br /><span>Pleurotus Sajor-caju Mushroom</span>
					</div>
					<div class="mushroom-menu-selection">
					<abbr title="Plotorous Florida Mushroom"><img src="../images/icon/florida.png" class="m-m" onClick="simuMushroom(22);" ></abbr><br /><span>Pleurotus Florida Mushroom</span>		
					</div>
				</div>
				<div id="status-cont">
	
					<div class="status-cont-box">
						<span><b>Box 1 Status</b></span><br />
						<span id="status-cont-status1" style="padding-left:20px;" >Progress Status:&nbsp;None</span><br />
						<span id="status-cont-dessease1" style="padding-left:20px;" >Dessease Status:&nbsp;None</span><br />
						<span id="status-cont-insect1" style="padding-left:20px;" >Insect Status:&nbsp;None</span><br />
					</div>
					<div class="status-cont-box">
						<span><b>Box 2 Status</b></span><br />
						<span id="status-cont-status2" style="padding-left:20px;" >Progress Status:&nbsp;None</span><br />
						<span id="status-cont-dessease2" style="padding-left:20px;" >Dessease Status:&nbsp;None</span><br />
						<span id="status-cont-insect2" style="padding-left:20px;" >Insect Status:&nbsp;None</span><br />
					
					</div>
				
				</div>
			</div>

			<div id="box-1" ><h2>Box 1</h2><img id="img1" src="../images/mushroom/start.jpg"></div>
			<div id="box-2" ><h2>Box 2</h2><img id="img2" src="../images/mushroom/start.jpg"></div>

			<div id="box-1-status">Time: <?php echo $time1."<br /><b id=\"span_temp1\">Temperature: ".$temperature1."°c</b><br />"; ?></div>
			<div id="box-2-status">Time: <?php echo $time2."<br /><b id=\"span_temp2\">Temperature: ".$temperature2."°c</b><br />"; ?></div>

				<div id="tools-menu-container2">

					<div class="tools-menu-selection">				
						<img src="../images/icon/nor.png" onClick="changeCursor('n');">
						<span>Regular <br />cursor</span>
					</div>
					<div class="tools-menu-selection">
						<img src="../images/icon/harvest-tool.png" onClick="changeCursor('h');">
						<span>Harvest</span>
					</div>
					<div class="tools-menu-selection">
						<img src="../images/icon/dispose.png" onClick="changeCursor('d');">
						<span>Dispose</span>
					</div>

					<div class="tools-menu-selection">
						<img src="../images/icon/water.png" onClick="changeCursor('w');">
						<span>Water</span>
					</div>
					<div class="tools-menu-selection">
						<img src="../images/icon/insect.png" onClick="changeCursor('i');">
						<span>Insect</span>
					</div>

				</div>


		</div>




		<div id ="lecture-main">
			<div id="lecture-container">
				<div id="lecture-content">
				
							<p>
								<span style="color:#(color);"><span style="font-size: 16px;"><strong>What is a mushroom?</strong></span></span></p>
							<p style="text-align: justify;">
								<span style="color:#(color);"><span style="font-size: 18px;">A mushroom is defined as a microfungus with a distinctive fruiting body wich can be either epigeous or hypigeous. The micro fungi have a fruiting bodies large enought to be seeen with the naked eye and to be picked up by hands ( Chang and Miles 1992). in a narrow sense the word mushroom &nbsp;also referes only to the fruit body. mushroom used to be classified to the kingdom Plantea, but now they are belong to the kingdom Fungi due to unique fungal characteristic which draw a clear line from animal or plants. Unlike green plants, mushrooms are heterotrophs. Not having Chlorophyll, they cant generate nutrients by Photosynthesis.&nbsp;</span></span></p>
							<p style="text-align: justify;">
								<span style="color:#(color);"><img align="left" alt="" height="200" src="../module-image/mushroom-parts.jpg" width="225" /><span style="font-size: 18px;">Mushroom reed by spores (seeds for plants). Under the proper condition, spores generate into hyphea (Collective mycelia). Mycelia are filamentous and generally unseen with the naked eye. germinated hyphea from primary Mycelia, and the secondary mycelia through phasmogamy (hypal fusion). they accumulate nutrients from the substrate (soil from plants) and colonized substrate. when stimulated in humidity and temperature the mycelia colony forns pins under certain condition and grow to fruit bodies(fruits for plants). young fruit boddies are called pins (buds for plants).</span></span></p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								<strong><span style="font-size:18px;">Three Factors of mushroom Cultivation</span></strong></p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								<strong><span style="font-size:18px;">Spawn</span></strong></p>
							<p style="text-align: justify;">
								<span style="font-family: tahoma, geneva, sans-serif; font-size: 18px;"><img align="right" alt="" height="272" src="../module-image/spawn-kinds.png" width="300" />What is spawn to mushroom is like a seed is to crop. unlike spawn, spawn is already at its mycelia stage or growing on its own substrate such as its own sorghum, barly or saw dust. the life cycle of a mushroom start from a spores, but growers inaculate mycelia spawn origin than spore origin because of posible variation and mutation.</span></p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								&nbsp;</p>
							<p style="text-align: justify;">
								<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;"><br />
								</span></span></p>
							<p style="text-align: justify;">
								<strong><span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;">Substrate</span></span></strong></p>
							<p style="text-align: justify; margin-left: 40px;">
								<span style="color:#(color);"><span style="font-family: tahoma, geneva, sans-serif;"><span style="font-size: 18px;">Mushroom can be clasified as three categories by theire topic pattern; saprophytes, parasites or mycorrhizea, the most commonly grown mushrooms are saprophytes, decomposers in an ecosystem growing on organic matters like wood, leaves and straw in nature. raw materials can be used as substrate for primary decomposers such as oyster mushroom and enokitake which have lignocellulosic enzymes. on the othe hand the secondary decomposer like button mushroom or straw mushroom require substrate degraded by bacteria or othe fungi. mushroom require carbon, nitrogen and inorganic compound as its nutritional sources and the main nutrients are carbon soirces such as cellulose, hemicellulose and lignin.</span></span></span></p>
							<p style="text-align: justify;">
								<strong><span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;">Environment</span></span></strong></p>
							<p style="text-align: justify; margin-left: 40px;">
								<span style="color:#(color);"><span style="font-family: tahoma, geneva, sans-serif;"><span style="font-size: 18px;">The last important factor for mushroom &nbsp;growing is providing an apprpriate environment both for vegetative and reproductive growth. not being protected by a skin layer, fungi are easily, affected by growing conditions. so it can be said that the success or failure of mushroom cultivation depends on the control control growth conditions. Environment factors affecting mushroom cultivation includes temperature, humidity, light and ventilation.<br />
								</span></span></span></p>
							<p style="text-align: justify; margin-left: 40px;">
								<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;"><br />
								</span></span></p>
							<p style="text-align: justify;">
								<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;">Terms:<br />
								</span></span></p>
							<ul>
								<li>
									<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;"><strong>Epigeous</strong> Growing on the ground.<br />
									</span></span></li>
								<li>
									<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;"><strong>Hupogeous</strong> Growing under ground.<br />
									</span></span></li>
								<li>
									<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;"><strong>Plasmogamy</strong> Fusion of cell or protoplast withoout fusion of nuclei, as occurs in higher terrestrial fungi.<br />
									</span></span></li>
								<li>
									<span style="font-family:tahoma, geneva, sans-serif;"><span style="font-size: 18px;"><strong>Parasite</strong> An organism that grows, feeds, and sheltered on the different organism while contributing nothing to survive its host.&nbsp;<br />
									</span></span></li>
							</ul>

				
				</div>
				<div id="lecture-topic">
					<div id="close-lecture"><input type="button" id="back-to-simu" value="<< Go back to simulation"/></div>
					<div id="navi-topic">
						
					<?php
						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM module");
			
							echo "<ul>";
							while($row = mysql_fetch_array($res))
							{
								echo "<li><a href=\"#\" onClick=\"showContent(".$row['id'].")\">".$row['topic']."</a></li>";
							}//while
							echo "</ul>";

					?>					
					</div>
				</div>
			</div>
		</div>

<div id="selected-container">

	<div id="sm-container">
		<div id="smc-cont"></div>
		<div id="smc-slider">
		   <script>
			  window.dhx_globalImgPath="../codebase/imgs/";
		   </script>
			<script  src="../codebase/dhtmlxcommon.js"></script>
			<script  src="../codebase/dhtmlxslider.js"></script>
			<script  src="../codebase/ext/dhtmlxslider_start.js"></script>
			<link rel="STYLESHEET" type="text/css" href="../codebase/dhtmlxslider.css">

		<form method="get" action="receive.php" name="mushroom-info">

			<br />
			
			<input name="type" type="text" style="display:none;" id="hidden-mush-field"/>
			<label>Set the temperature</label>
			<div id="a1">Temperature is 0 °c</div>
			<input id="input1" value="0"  style="display:none;"  type="text" name="temp" onchange="checkTemp(1);"/><span id="temp_noti"></span>
				<script>
				$('#a1').css('color','#3333CC');
					function handler(pos,slider){
						document.getElementById("a1").innerHTML="Temperature is "+pos+" °c";
						document.getElementById("input1").value=pos;

						if(pos>=0 && pos<=14){
							$('#a1').css('color','#3333CC');	
						}
						if(pos>=15 && pos<=25){
							$('#a1').css('color','#00CC00');	
						}
						if(pos>=26 && pos<=35){
							$('#a1').css('color','#99FF00');	
						}
						if(pos>=36 && pos<=40){
							$('#a1').css('color','#FF6600');	
						}
						if(pos>=41 && pos<=100){
							$('#a1').css('color','#FF0000');	
						}

					}
					
					var slider=new dhtmlxSlider(null, 500);
					slider.attachEvent("onChange",handler);
					slider.init();
					
					
					
				</script>
			<br />
			<label>Select box</label>
			<select name="box-no" id="mush-box" onchange="checkBox(this.value);validateForm(this.value);"><option value="null">-choose box-</option><option value="1">box 1</option><option value="2">box 2</option></select><span id="box_noti"></span>
			<br />
			
			<div id="submit"><!-- <input type="submit" id="submit-mush-info" /> --></div>
		</form>
		 	 <a href="#" id ="close-mush-info" ></a>
			<!-- <input type="submit" id="close-mush-info" value="CLOSE"/>-->

		</div>
	</div>
</div>

	</body>
	<script>
			function validateForm(w){
				if(w!="null"){
					document.getElementById("submit").innerHTML="<?php echo '<input type=\"submit\" id=\"submit-mush-info\" />'; ?>";
				}
			}

		     document.getElementById("<?php echo $show_img; ?>").src =images[age2];
		     document.getElementById("<?php echo $show_img2; ?>").src =images[age];

	</script>

			<?php
				if($status1=="harvest"){
					echo "<script>document.getElementById(\"img1\").src = \"../images/mushroom/har.jpg\";</script>";
				}
				if($status1=="dispose"){
					echo "<script>document.getElementById(\"img1\").src = \"../images/mushroom/start.jpg\";</script>";
				}
				if($status2=="harvest"){
					echo "<script>document.getElementById(\"img2\").src = \"../images/mushroom/har.jpg\";</script>";
				}
				if($status2=="dispose"){
					echo "<script>document.getElementById(\"img2\").src = \"../images/mushroom/start.jpg\";</script>";
				}
			?>
</html>