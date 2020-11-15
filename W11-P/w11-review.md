### 20180972 김은서

# 새로배운내용
```
# Oracle Transaction
-트랜잭션
  DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위
  한꺼번에 모두 수행되어야 할 일련의 연산들
  commit 되거나 rollback 된다.

-트랜잭션의 성질
  원자성 atomicity, 트랜잭션의 연산은 db에 모두 반영되거나 전혀 반영되지 않아야 한다.
  일관성 consistency, 실행이 성공적으로 완료하면 DB 상태가 일관성있게 변환된다.
  독립성 isolation, 둘 이상의 트랜잭션이 병행될 경우, 다른 트랜잭션에 끼어들 수 없다.
  지속성 durability, 트랜잭션이 성공적으로 수행하면 그 결과는 영구적으로 반영되어야 한다.
  
-트랜잭션의 상태 
활동 active -> 부분완료 partially committed -> 완료 committed
활동 active -> 실패 failed -> 철회 aborted


```

# 문제 발생 + 해결과정
```
 java+oracle 연동 실습 환경 구축만 하면 되므로 없었음. 

```

# 참고할 만한 사이트

oracle 
https://www.oracle.com/tools/downloads/sqldev-downloads.html

SQL DEVELOPER 
https://www.oracle.com/tools/downloads/sqldev-downloads.html

oracle JDK
https://www.oracle.com/java/technologies/javase/javase-jdk8-downloads.html

Eclipse IDE for Java Developers
https://www.eclipse.org/downloads/packages/


## 회고
```
### (+) java와 oracle을 한동안 사용하지 않아 까먹을 거 같았는데 복습할 수 있는 기회가 생겨 좋음!.! 

### (-) java를 예전에 배워 기본코드 말고는 기억이 나지 않아 미리 예습 해야겠음.

### (!)JDBC 파일은 오라클 설치 시 기본으로 제공되며, jdbc를 이용해 java와 oracle을 연결할 수 있다는 것을 알게 되었음.
```

