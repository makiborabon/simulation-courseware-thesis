					<?php

						$id=$_GET["q"];

						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM module WHERE id=$id");


						while($row = mysql_fetch_array($res))
						{
						echo	"<div id=\"module-action\">"
									."<a href=\"sql/delete-module.php?id=".$row['id']."\"><div id=\"module-action-delete\"></div></a>"
									."<a href=\"edit-module.php?id=".$row['id']."\"><div id=\"module-action-edit\"></div>"
								."</div></a>";
							echo "<b>Topic:&nbsp;</b>".$row['topic']."<br /><b>Lesson No:&nbsp;</b>".$row['lesson']."<br /><b>Description:&nbsp;</b>".$row['description']."<br /><b>Content:</b><br />".$row['content'];

						}//while


					?>