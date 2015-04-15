<?php 
	include('header.php');
?>

<div class="add_post content">
 <h2 class="blog-post-title">Добавление новой статьи</h2>
        <br>
<form action="demo_add_post.php"  method="post" >

<p>
  <label>
    <input name="title" type="text" value="">
  </label>
Название статьи</p>

<p>
  <textarea name="text" cols="25" rows="10"></textarea>
  Текст статьи
</p>
<input type=submit value="Добавить">

</form>
</div>
