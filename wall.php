<?php
session_start();
include("db_con.php");
include("functions.php");
/*if($_GET['id']){
$resw = "SELECT title, text FROM posts WHERE id = ".$_GET['id'];
$res = mysql_query($resw);
$final_text;
echo "<a href='index.php'>Вернуться назад</a>";
while($row = mysql_fetch_array($res)) {
	$final_text .= "<div class='list_of_posts'><h1>";
	$final_text .= $row['title'];
	$final_text .= "</h1><br>";
	$final_text .= "<p>";
	$final_text .= $row['text'];
	$final_text .= "</p></div>";
}	
	echo $final_text;
}
else {
	echo"<h1 align='center'>Содержание</h1>";
	
$zap = "SELECT title, text, id FROM posts";
$res = mysql_query($zap);
$final_text;
while($row = mysql_fetch_array($res)) {
	$final_text .= "<div class='list_of_posts'>Название статьи: <a href='";
	$final_text .= "index.php?id=".$row['id']."'>";
	$final_text .= $row['title'];
	$final_text .= "</a></div>";
}
echo $final_text;
}
*/?>
<h1 align="center">Добро пожаловать!</h1>
<p>Сайт находится в состоянии разработки, практически каждую неделю на нем появляется какая-то новая функция, какая-то дополнительная возможность, 
какая-то очередная фича, и всё это благодаря вам, дорогие мои! Потому что именно вы являетесь моей мотивацией. Мне хочется сделать что-то полезное,
что-то, что сможет помочь людям, но иногда мне не хватает вдохновения, иногда просто леньки, но теплые слова, которые я от вас слышу, наполняют
паруса моей лодки ветром, и я мчу на полной скорости на встречу работе. Если бы не Текстор, который в самом начале, полный энтузиазма, не подхватил мою
идею, заразив меня этим самым энтузиазмом, если бы не Хейнз, который сразу вызвался помочь мне с лого, что наполнило меня уверенностью в том, 
что сайт вам тоже интересен, что он и для вас в том числе представляет какую-то важность, если бы не Анон Иванов с бесчисленным количеством идей, 
которые с каждым днем всё появлялись и появлялись, удивляя меня своим потенциалом, возможной полезностью, да и собственно мотивируя меня, я бы, наверное,
не дошел бы даже до этого вот приветственного поста. Спасибо вам, ребят! Спасибо и Gg Wp, который подбадривал меня, иногда его советы были более чем
уместны, полезны и вытягивали меня из тупиков. Спасибо первым зарегестрировавшимся, спасибо Ярославу за теплые слова, Игорю, за помощь с дизайном, Сергею, за 
его советы (как же я тебя задолбал, наверное :D), спасибо вам большое, ведь благодаря вам я набрался такого количества знаний и умений, столкнулся с тем, 
чего раньше и знать не знал, но вот, сейчас уже более чем успешно использую. <br>
Это всё ради вас, пользователи. И для вас. <br>
Спасибо вам большое. Ваш Джакс.</p>

