<?php
$detail_link='';

if(isset($_GET['input_Id'])){
     $moviename = $_GET['input_Id'];
} else {
    $moviename = $_POST['input_Id'];
    $detail_link='<a href="process_movie_detail.php? show_id='.$_POST['input_Id'].'">정보 더보기</a>';
}


$link = mysqli_connect('localhost', 'root', '1234', 'netflix');

  $query = "SELECT * FROM netflix WHERE show_id= '{$moviename}' ";
  $result = mysqli_query($link, $query);
  $list='';

  while ($row = mysqli_fetch_array($result)) {
    $list=$list."<h2>{$row['title']} <br><br><br></h2>
     <h3>장르: {$row['listed_in']} <br><br><br>
     상영국가: {$row['country']} <br><br><br>
     출연: {$row['cast']} <br><br><br>
     러닝타임: {$row['duration']} <br></h3>" ;
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
          <?=$detail_link?>
           <form action="index.php" method="POST">
            <h2><p><input type="submit" value="돌아가기"></p></h2>
        </div>

    </body>
  </html>
