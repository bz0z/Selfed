<?php
include('db_con.php');
$post_title = $_POST['title'];
//$verseauthor= $_GET['id'];
$post_text= $_POST['text'];
//(mysql_select_db("selfed", $db))";
 $result = mysql_query("INSERT INTO posts(name, text, active) VALUES('$post_title', '$post_text', '1') ");
 if ($result) {
echo "Ваши данные успешно добавлены";
header('Location: index.php');
}
echo "Ваши данные не добавлены";
?>
