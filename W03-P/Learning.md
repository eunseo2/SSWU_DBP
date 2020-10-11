### 20180972 김은서

# 새로배운내용
```
 보안 문제 및 방지 대책
 1. INPUT 악의적인 정보 보낼 수 있음.
 2. OUTPUT 과정에서 문제 발생시켜서 데이터가 바뀔 수 있음.
 SQL Injection
 임의의 sql문을 주입하고 실행하게 하여 db가 비정상적인 동작을 하는 행위
 대응방안 -> 입력 값을 문자열로 인식하여 공격쿼리가 들어가도 의미없는 단순 문자열로 처리해야함.
```

# 문제 발생 + 해결과정
```
  $_POST,$filtered['id'] 이 두가지를 혼동해
  $POST,$_filtered로 써서 오류가 났다  _(언더바)도 신경써서 코딩해야 겠다고 생각했음. 
```

# 참고할 만한 사이트
openAI 인공지능 GPT3 
https://www.w3schools.com/tags/tag_form.asp

## 회고
```
### (+) SQL Injection에 대해 알게 되어 보안 문제도 신경을 써야 겠다고 생각했다. sql문을 이용하여 웹 페이지에 보여줄 수 있어서 신기했다. 
### CSS를 이용하여 웹 페이지가 바뀌는 것이 신기했음.

### (-) php문법에 대해 더 공부해야 겠다고 생각함. 

### (!) 사용자가 입력한 정보는 신뢰할 수 없다고 생각 한 후 검증하여 DB에 저장해야 된다는 것을 알게 되었다!
```
## 실행영상 https://youtu.be/6pT5nTamSik