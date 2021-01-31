					<?php

						$id=$_GET["q"];

						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM module WHERE id=$id");


							while($row = mysql_fetch_array($res))
							{
								echo "Topic: ".$row['topic']."<br />Lesson number: ".$row['lesson']."<br />Description: ".$row['description']."<br />".$row['content'];

							}//while


					?>