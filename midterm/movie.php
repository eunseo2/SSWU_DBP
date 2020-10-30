<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>NETFLIX</title>
    <style>

      #jb-header {

        text-align: center;
        padding: 10px;
        margin-bottom: 40px;
        border-radius:10px;
        color : red;
      }
      #jb-content {
        text-align: center;
        border: 1px solid #bcbcbc;
        border-radius:10px;
        padding: 10px;
        background-color: #424242;
        margin-bottom: 40px;
        color : white;


      }

      #jb-footer {
        text-align: right;
        clear: both;
        padding: 10px;
        color : white;
      }
      a{
        color:white;
        text-decoration: none;
      }
    </style>
  </head>
  <body bgcolor="black">

    <div id="jb-container">
      <div id="jb-header">
        <h1> Movie Search</h1>
      </div>

      <div id="jb-content" >
        <p><a href = "movie.php"> 영화 netflix ID를 입력하세요.</a></p>
        <form action="process_movie.php" method="post">
        <p><input type="int" name="input_Id" placeholder="NETFLIX ID"></p>
        <p><input type="submit" value="입력"></p> </form>
      </div>

      <center>
        <img src = "b.jpg" width="750" height="300" align="center" >
      </center>

      <div id="jb-footer">
        <p>data kaggle NETFLIX Movies and TV shows</p>
      </div>
  </body>
</html>
