### 20180972 김은서

# 새로배운내용
```
kaggle
```

# 문제 발생 + 해결과정
```
  $query = "SELECT title,listed_in,country,date_added,description FROM netflix inner join detail on netflix.show_id=detail.show_id WHERE netflix.title= '{$tvname}'  "; 
  두 테이블을 inner join으로 조인할 때 중복된 컬럼이 있을 경우 어떤 컬럼을 얘기하는 것인지 컴퓨터는 인식을 하지 못해 모호하다고 에러 메세지가 나왔다.
  내가 생각했을 때는 직관적으로 netflix 테이블과 detail 테이블의 title컬럼의 값이 동일하여 당연히 title도 나타낼 수 있다고 생각하였으나, 
  이것은 내 생각이었다. join할때는 중복된 컬럼이 없는 것을 나타내야 한다. 중복된 컬럼은 조건절에만 쓸 수 있다. 
```
![join할때](https://user-images.githubusercontent.com/70589857/97781562-b3950480-1bcf-11eb-9239-e7334971efcb.png)



# 참고할 만한 사이트
데이터(kaggle)
https://www.kaggle.com/

mysql에 csv import 
https://shawn-choi.tistory.com/4

## 회고
```
### (+) sql,php 복습 하면서 개념 정리 할 수 있었음

### (-) css에 대해 몰라서 웹 페이지를 잘 꾸미지 못함 

### (!) style로 테이블 크기,너비,간격 조정할 수 있는 걸 알게됨!
```


