<?php
$detail_link='';

if(isset($_GET['listed_in'])){
     $genre = $_GET['listed_in'];
} else {
    $genre = $_POST['listed_in'];
}


$link = mysqli_connect('localhost', 'root', '1234', 'netflix');

  $query = "SELECT * FROM netflix WHERE listed_in= '{$genre}' limit 30 ";
  $result = mysqli_query($link, $query);

  $emp_info = '';


  while ($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
     $emp_info .= '<td>'.$row['title'].'</td>';
     $emp_info .= '<td>'.$row['listed_in'].'</td>';
     $emp_info .= '<td>'.$row['country'].'</td>';
     $emp_info .= '<td>'.$row['cast'].'</td>';
     $emp_info .= '<td>'.$row['duration'].'</td>';
     $emp_info .= '</tr>';

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
          <table border="1">
       <tr>
           <th>title</th>
           <th>listed_in</th>
           <th>country</th>
           <th>cast</th>
           <th>duration</th>
       </tr>
       <?= $emp_info ?>
   </table>

           <form action="index.php" method="POST">
            <h2><p><input type="submit" value="돌아가기"></p></h2>
        </div>

    </body>
  </html>
