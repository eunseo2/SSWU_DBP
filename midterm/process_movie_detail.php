<?php
$name = $_GET['show_id'];

$link = mysqli_connect('localhost', 'root', '1234', 'netflix');

  $query = "SELECT * FROM detail WHERE show_id= '{$name}' ";
  $result = mysqli_query($link, $query);
  $list='';


  while ($row = mysqli_fetch_array($result)) {
     $list=$list."<h3>감독 :{$row['director']} <br><br><br>
     개봉일: {$row['date_added']} <br><br><br>
     설명: {$row['description']} <br><br><br></<h3>";

  }
  ?>

  <!doctype html>
  <html lang="ko">
    <head>
      <meta charset="utf-8">
      <title>movie info</title>
      <style>

        #jb-content {
          text-align: center;
          border: 1px solid #bcbcbc;
          border-radius:10px;
          padding: 10px;
          background-color: #424242;
          margin-bottom: 40px;
          color : white;

        }

      </style>
    </head>
    <body bgcolor="black">
        <div id="jb-content" >
          <ol><?= $list ?></ol>
           <form action="index.php" method="POST">
            <h2><p><input type="submit" value="돌아가기"></p></h2>
        </div>

    </body>
  </html>
