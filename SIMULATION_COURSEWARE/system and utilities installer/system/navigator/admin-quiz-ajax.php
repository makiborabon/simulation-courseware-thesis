					<?php

						$id=$_GET["q"];

						include("../includes/connection.php");
						$res=mysql_query("SELECT * FROM quiz WHERE id=$id");


							while($row = mysql_fetch_array($res))
							{
							echo	"<div id=\"quiz-action\">"
										."<a href=\"sql/delete-quiz.php?id=".$row['id']."\"><div id=\"quiz-action-delete\"></div></a>"
										."<a href=\"sql/edit-quiz.php?id=".$row['id']."\"><div id=\"quiz-action-edit\"></div>"
									."</div></a>";
								echo "<b>Question: </b>".$row['question']."<br /><b>Choice 1: </b>".$row['choice1']."<br /><b>Choice 2: </b>".$row['choice2']."<br /><b>Choice 3: </b>".$row['choice3']."<br /><b>Correct answer: </b>".$row['answer'];

							}//while


					?>