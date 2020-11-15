### 20180972 김은서

# 새로배운내용

# Oracle Transaction
* 트랜잭션
  * DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위
  * 한꺼번에 모두 수행되어야 할 일련의 연산들
  * commit 되거나 rollback 된다.

* 트랜잭션의 성질
  * 원자성 atomicity, 트랜잭션의 연산은 db에 모두 반영되거나 전혀 반영되지 않아야 한다.
  * 일관성 consistency, 실행이 성공적으로 완료하면 DB 상태가 일관성있게 변환된다.
  * 독립성 isolation, 둘 이상의 트랜잭션이 병행될 경우, 다른 트랜잭션에 끼어들 수 없다.
  * 지속성 durability, 트랜잭션이 성공적으로 수행하면 그 결과는 영구적으로 반영되어야 한다.
  
* 트랜잭션의 상태 
  * 활동 active -> 부분완료 partially committed -> 완료 committed
  * 활동 active -> 실패 failed -> 철회 aborted

# 리팩토링
* DB 접속 이후 자원 반납
 * select, update, insert, delete 할 때 마다 db 연결하고 종료해서, 자원을 반납하자
 * Connection, Statement, ResultSet 객체를 사용한 뒤 close() 메소드를 호출해서 자원을 반납하기
 * 반납하지 않으면 DB서버가 해당 SQL문의 결과를 계속 저장하고 있어야 하므로 메모리 낭비 발생


# 문제 발생 + 해결과정
```
String sql = "update departments set location_id=100 where department_id = 280";
SQL 오류: ORA-02291: integrity constraint (HR.DEPT_LOC_FK) violated - parent key not found

location_id 외래키 이므로 location table의 location_id에 있는 값을 써야한다.
100은 없으므로 오류가 난다.


```

# 실행영상



# 참고할 만한 사이트
오류 해결한 사이트
https://thebook.io/006977/ch09/01/02-03/


## 회고
```
### (+) 이론으로 배웠던 트랜잭션을 실습으로 하니까 이해가 바로됬다!

### (-) java코드가 어려워서 복습을 해야겠음.

### (!) java는 메소드로 묶을 수 있어서 좋은거 같다!
```


