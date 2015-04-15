<?php

include("db_con.php");

if($_GET['id']){
$resw = "SELECT name, text FROM posts WHERE id = ".$_GET['id'];
$res = mysql_query($resw);
$final_text;
echo "<a href='index.php'>Вернуться назад</a>";
while($row = mysql_fetch_array($res)) {
	$final_text .= "<div class='list_of_posts'><h1>";
	$final_text .= $row['name'];
	$final_text .= "</h1><br>";
	$final_text .= "<p>";
	$final_text .= $row['text'];
	$final_text .= "</p></div>";
}	
	echo $final_text;
}
else {
	echo"<h1 align='center'>Содержание</h1>";
$zap = "SELECT name, text, id FROM posts";
$res = mysql_query($zap);
$final_text;
while($row = mysql_fetch_array($res)) {
//	$final_text .= ++$start;
	$final_text .= "<div class='list_of_posts'>Название статьи: <a href='";
	$final_text .= "index.php?id=".$row['id']."'>";
	$final_text .= $row['name'];
	$final_text .= "</a></div>";
//	$final_text .= "<tr><td>Текст статьи:<p>";
	//$final_text .= $row['text'];
	//$final_text .= "</p></td></tr>";
	//$i++;
}
echo $final_text;
}

?>
