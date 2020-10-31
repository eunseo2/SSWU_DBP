### 20180972 김은서

# 새로배운내용
```
-kaggle에 있는 데이터를 DB에 저장하는 방법
kaggle에서 데이터 파일을 csv 형식의 파일로 받는다.
그 파일을 mysql workbench를 이용해 import 시키면 DB에 TABLE로 저장할 수 있다.

-웹 사이트 디자인
<STYLE> </STYLE> 태그 안에 배경의 색깔, 정렬방식등을 넣을 수 있다. 

-웹에 이미지 삽입
이미지 파일을 넣을 때는 이미지를 먼저 htdocs 파일에 넣고 <img src = "경로"> 를 넣으면 된다.
```

# 문제 발생 + 해결과정
```
  $query = "SELECT title,listed_in,country,date_added,description FROM netflix inner join detail on netflix.show_id=detail.show_id WHERE netflix.title= '{$tvname}'  "; 
  두 테이블을 inner join으로 조인할 때 중복된 컬럼이 있을 경우 어떤 컬럼을 얘기하는 것인지 컴퓨터는 인식을 하지 못해 모호하다고 에러 메세지가 나왔다.
  내가 생각했을 때는 직관적으로 netflix 테이블과 detail 테이블의 title컬럼의 값이 동일하여 당연히 title도 나타낼 수 있다고 생각하였으나, 
  이것은 내 생각이었다. join할때는 중복된 컬럼이 없는 것을 나타내야 한다. 중복된 컬럼은 조건절에만 쓸 수 있다. 
  따라서 title 컬럼을 netflix에만 넣고 dertail 테이블에는 넣지 않았다. 
```
<수정전>

![join할때](https://user-images.githubusercontent.com/70589857/97781562-b3950480-1bcf-11eb-9239-e7334971efcb.png)

<DB 수정 후>

![db구조](https://user-images.githubusercontent.com/70589857/97781728-a9bfd100-1bd0-11eb-88f0-89f47cea216e.PNG)

# 참고할 만한 사이트
데이터(kaggle)
https://www.kaggle.com/

mysql에 csv import 
https://shawn-choi.tistory.com/4

## 회고
```
### (+) 외부에서 데이터를 받아와서 웹 사이트를 만드는 것이 재미있었다! 
        DB구조부터 PHP,HTML 코드를 직접 짜고 모르는 것이 생기면 혹은 에러가 날 경우 google에 검색하면서 해결해나아가면서
        많을 것을 배울 수 있었다!

### (-) 이 웹사이트는 localhost즉 나만 볼 수 있어 아쉽다.
        다른 사람들한테 보여줄려면 화면 녹화를 통해 유튜브에 올리는 방식말고  naver나 github 처럼 다른 컴퓨터 ip로도 접속 할 수 있으면 좋을거 같다.!! 
        AWS EC2에 대해 공부하여 공용 IP를 할당받아 내 웹사이트를 다른 사람이 볼 수 있는 방법에 대해서도 알고싶다! 

### (!) kaggle이라는 유용한 사이트를 알게 되어서 기쁘다! 
        MYSQL wockbench도 csv import등 기능이 있다는 것을 알게 되었다! 
```


