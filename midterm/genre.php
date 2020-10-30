<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>TV</title>
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


      a{
        color:white;
        text-decoration: none;
      }
    </style>
  </head>
  <body bgcolor="black">

    <div id="jb-container">
      <div id="jb-header">
        <h1> movie search</h1>
      </div>
      <div id="jb-content" >
        <p>영화 장르를 선택해주세요</p>
        <form action="process_genre.php" method="post">
          <select name="listed_in">
          <option value="Children & Family Movies">Children & Family Movies</option>
          <option value="Comedies">Comedies</option>
          <option value="Action & Adventure">Action & Adventure</option>
          <option value="Documentaries">Documentaries</option>
          </select>
          <p><input type="submit" value="입력"></p> </form>
      </div>



      <center>
        <img src = "b.jpg" width="750" height="300" align="center" >
      </center>


  </body>
</html>
