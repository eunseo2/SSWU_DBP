### 20180972 김은서

# 새로배운내용

```

SQL - RDBMS - table 형태
NOSQL- NOSQL DBMS - {id:1, name:'milk'}


MongoDB구조
DATABASE -> COLLECTIONS -> DOCUMENTS


데이터 삽입
db.myCollection.insertOne({})

조회
db.myCollection.find()

수정
db.myCollection.replaceOne({})

데이터 삭제
db.myCollection.deleteMany({})

Collection 삭제 
db.myCollection.drop()

db 삭제
db.dropDatabase()

```
MongoDB 설치 - WINDOWS
MongoDB Community Server 설치
  설치파일 다운로드 : https://www.mongodb.com/try/download/community
  MongoDB Compass 함께 다운로드 : https://www.mongodb.com/products/compass
  Choose Setup Type > Complete
  Service Configuration > Install MongoD as a Service > Run service as Network Service user
  MongoDB Compass 함께 설치 (GUI 프로그램)
  설치가 완료되면, mongod (mongoDB Server) 가 자동으로 실행됨
환경변수 설정
  제어판 > 고급 시스템 설정 보기 > 환경변수 > 시스템 변수 Path 선택 > 편집 > 새로 만들기 
  C:\Program Files\MongoDB\Server\[버전명]\bin
mongoDB 클라이언트 실행
> mongo
MongoDB Compass 실행


# 문제 발생 + 해결과정
```

```

# 실행영상



# 참고할 만한 사이트
몽고DB 다운로드
https://www.mongodb.com/try/download/community
MongoDB Compass
https://www.mongodb.com/products/compass


## 회고
```
### (+) mongo DB를 직접 해볼 수 있어서 좋았다!

### (-) compass를 이용하지 않으면 보기가 어려움!

### (!) mongodb compass가 gui 환경이 되는 점이 좋았음!
