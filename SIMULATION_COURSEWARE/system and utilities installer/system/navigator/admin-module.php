<html>
	<head>
				<script type="text/javascript" src="jquery.js"></script>
		<title>Mushroom Admin view modules</title>
		<style>
			body{
				background-image:url("../images/design/main-bg.png");
			}
			#navigator{

				width:88.6%;
				height:6%;
				position:absolute;
				top:5%;
				left:3%;

				background-color:white;
				border-radius:3px 3px 3px;
				
				font-family: verdana,helvetica,arial,sans-serif;
			}
			.selected{
				
			}
			#navigator>ul>li{
				list-style:none;
				display:inline;
				padding-right:25px;
				color:gray;
			}
			#navigator>ul>li>a{
				color:gray;
				text-decoration:none;

			}
			
			#navigator>ul>li>a:hover{
				color:464646;
			}
			#log-out{
					float:right;
			}
			#new{
				border-left:1px solid gray;
				
			}
			#new>a{
				padding-left:25px;
				
			}
			#main-container{
	
				width: 65%;
				height:80%;
				position: relative;
				top:10%;
				left:14%;
				border-radius:3px 0px 0px 3px;
				text-align:center;
				padding-left:7%;
				padding-top:2%;

			}

			#hide-container{
				background-image:url("../images/design/trans-bg.png");
				position:absolute;
				top:0%;
				left:0%;
				width:99.7%;
				height:99.7%;
			}
			#side-content{
				
				width:20%;
				height:80%;

				position: absolute;
				top: 12%;
				left: 3%;
				padding: 10px;
				overflow: scroll;

				background-color:white;
				border-radius: 6px 6px 6px;
			}
			#side-content>ul>li{
				list-style:none;
			}
			#side-content>ul>li>a{
				text-decoration:none;
				color:gray;
			}
			#side-content>ul>li>a:hover{
				text-decoration:none;
				color:464646;
			}

			#module-content{
				
				width:65%;
				height:80%;

				position: absolute;
				top: 12%;
				left: 25%;
				padding: 10px;


				background-color:white;
				border-radius: 6px 6px 6px;
			}
			#module-content-cont{
			
				width:96%;
				height:88%;

				position: absolute;
				top: 8%;
				left: 1%;
				padding: 10px;
				overflow: scroll;

				background-color:white;
				border-radius: 6px 6px 6px;
			}
			#module-action{
				
				width:98%;
				height:6%;
			}
			#module-action-delete{
		
				width:4%;
				height:99%;
				float:right;
				background-image:url("../images/icon/delete-icon.png");
				background-repeat:no-repeat;
			}
			#module-action-delete:hover{
		

				background-image:url("../images/icon/delete-icon-hover.png");
				background-repeat:no-repeat;
			}
			#module-action-edit{
				
				width:4%;
				height:99%;
				float:right;
				background-image:url("../images/icon/edit-icon.png");
				background-repeat:no-repeat;
			}
			#module-action-edit:hover{
				

				background-image:url("../images/icon/edit-icon-hover.png");
				background-repeat:no-repeat;
			}
		</style>
		<script>
			$(document).ready(function(){

			$('#hide-container').hide();
			  $('#new').click(function(){
			    $('#hide-container').show();
			  });
			  $('#close').click(function(){
				$('#hide-container').hide();
				});
			});

			//ajax
			function showContent(str)
			{
			if (str=="")
			  {
			  document.getElementById("module-content-cont").innerHTML="";
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
				document.getElementById("module-content-cont").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","admin-lecture-ajax.php?q="+str,true);
			xmlhttp.send();
			}
		
		</script>
	</head>
	<body>
		<div id="navigator">
			<ul>
				<li><a href="admin-index.php" id="user" class="selected">Accounts</a></li>
				<li><a href="admin-module.php" id="module">Modules</a></li>
				<li><a href="admin-quiz.php">Quiz</a></li>
				<li id="log-out"><a href="log-out.php" id="log-out">Log-out</a></li>

				<li id="new"><a href="add-module.php" id="new" onClick="showContent()">Add new</a></li>
			</ul>
		</div>
			<div id="side-content">
					<?php
						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM module ORDER BY lesson ASC");
			
							echo "<ul>";
							while($row = mysql_fetch_array($res))
							{
								echo "<li><a href=\"#\" onClick=\"showContent(".$row['id'].")\">".$row['topic']."</a></li>";
							}//while
							echo "</ul>";

					?>			
			</div>
			<div id="module-content">

				<div id="module-content-cont">
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
			</div>

		<div id="hide-container"></div>
	
	</body>
</html>