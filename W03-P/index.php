<?php
$link = mysqli_connect("localhost:3307", "root", "rootroot", "dbp");
$query = "SELECT *FROM topic";
$result = mysqli_query($link,$query);
$list='';
while($row = mysqli_fetch_array($result)){
  $list= $list."<li><a
   href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
  'title' => '강아지 :',
  'description' =>'강아지는 개의 새끼를 일컫는다.
  여러가지 견종이 있으며, </br>
  사람의 지시를 잘따르는 동물이다.'
);

$update_link='';
$delete_link='';

if(isset($_GET['id'])){
  $query = "SELECT * FROM topic WHERE id = {$_GET['id']}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title' => $row['title'],
    'description' => $row['description']
  );
  $update_link = '<a href ="update.php?id='.$_GET['id'].'">update</a>';
  $delete_link = '
    <form action = "process_delete.php" method="POST">
    <input type="hidden" name ="id" value="'.$_GET['id'].'">
    <input type="submit" value ="delete">
    </form>
  ';
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf=8">
  <title>DOG</title>

  <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
  <div id = "frm">
    <h1><a href = "index.php">DOG</a></h1>
    <ol> <?=$list ?></ol>
    <a href = "create.php"  id = "btn"> create</a>
    <?= $update_link?>
    <?= $delete_link?>

    <h2> <?= $article['title'] ?> </h2>
    <?= $article['description'] ?>
  </div>
</body>

</html>
