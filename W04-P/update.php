<?php
$link = mysqli_connect("localhost:3307", "root", "rootroot", "dbp");
$query = "SELECT *FROM topic";
$result = mysqli_query($link, $query);
$list='';
while ($row = mysqli_fetch_array($result)) {
    $list= $list."<li><a
   href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
  'title' => '강아지 :',
  'description' =>'강아지는 개의 새끼를 일컫는다.
  여러가지 견종이 있으며, 사람의 지시를 잘따르는 동물이다.'
);

if (isset($_GET['id'])) {
    $filtered_id =mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM topic WHERE id = {$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array(
    'title' => $row['title'],
    'description' => $row['description']
  );
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
    <form action = "process_update.php" method="post">
    <input type ="hidden" name="id" value="<?=$filtered_id?>"
    <p><input type = "text" name = "title" placeholder = "title" value="<?=$article['title']?>"</p>
    <p><textarea name = "description" placeholder="description"><?=$article['description']?></textarea> </p>
    <p><input type = "submit"  id = "btn"></p>
  </div>
</body>

</html>
