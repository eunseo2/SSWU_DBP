<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>NETFLIX</title>
    <style>

      #jb-header {
        background-color: #424242;
        text-align: center;
        padding: 10px;
        margin-bottom: 40px;
        border: 1px solid #bcbcbc;
        border-radius:10px;
        color : red;
      }
      #jb-content {
        text-align: center;
        border: 1px solid #bcbcbc;
        border-radius:10px;
        padding: 5px;
        width: 380px;
        box-sizing: 100px;
        background-color: #424242;
        line-height: 2.0;
        margin-bottom: 40px;
        float: left;
        color : white;


      }
      #jb-sidebar {

        width: 400px;
        padding: 20px;
        margin-bottom: 200px;
        float: left;
        border: 1px solid #bcbcbc;
        background-color: #424242;
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
        <h1> NETFLIX SEARCH</h1>
      </div>
      <div id="jb-content" >
        <p><a href = "movie.php"> 영화정보 검색</a></p>
      </div>
      <div id="jb-content">
        <p><a href = "tv.php"> TV프로그램 검색</a></p>
      </div>
      <div id="jb-content">
        <p><a href = "genre.php"> 장르별 영화 추천</a></p>
      </div>
      <center>
        <img src = "b.jpg" width="700" height="250" align="center" >
      </center>

      <div id="jb-footer">
        <p>data kaggle NETFLIX Movies and TV shows</p>
      </div>
  </body>
</html>
