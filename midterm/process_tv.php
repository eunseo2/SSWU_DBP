<?php
$detail_link='';

if(isset($_GET['input_tv_title'])){
     $tvname = $_GET['input_tv_title'];
} else {
    $tvname = $_POST['input_tv_title'];
  }





$link = mysqli_connect('localhost', 'root', '1234', 'netflix');

  $query = "SELECT title,listed_in,country,date_added,description FROM netflix inner join detail on netflix.show_id=detail.show_id WHERE netflix.title= '{$tvname}'  ";
  $result = mysqli_query($link, $query);
  $list='';

  while ($row = mysqli_fetch_array($result)) {
    $list=$list."<h2>{$row['title']} <br><br><br></h2>
     <h3>장르: {$row['listed_in']} <br><br><br>
     방영국가: {$row['country']} <br><br><br>
     첫방송일: {$row['date_added']} <br><br><br>
     설명: {$row['description']} <br><br><br></h3>";
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
        a{
          color:black;
          text-decoration: none;
          background-color: white;

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
