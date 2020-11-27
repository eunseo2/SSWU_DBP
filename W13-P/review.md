### 20180972 김은서

# 새로배운내용

APACHE TOMCAT 설치 및 설정
이클립스에서 톰켓 서버 실행

JSP 란?
* JSP, Java Server Page
  * HTML 내부에 java 코드를 입력하여, 웹 서버에서 동적으로 웹 브라우저를 관리하는 언어
  
* JSP 구동 원리
  * JSP를 실행하면, JSP 에서 생성된 서블릿이 실행됨
  * 1) 클라이언트가 jsp 실행을 요청하면, 서블릿 컨테이너는 jsp 파일에 대응하는 자바 서블릿을 찾아서 실행한다.
  * 2) 대응하는 서블릿이 없거나, jsp 파일이 변경되었으면, jsp 엔진을 통해 서블릿 자바 소스를 생성한다.
  * 3) 자바 컴파일러가 서블릿 자바 소스를 클래스 파일로 컴파일 한다. (jsp 파일이 변경될때마다 반복)
  * 4) jsp 로 부터 생성된 서블릿은 서블릿 구동 방식에 의해 service() 메소드가 호출되고, 서블릿이 생성한 html 화면을 웹 브라우저로 보낸다. 



# 문제 발생 + 해결과정
```
form method="post" action="insert.jsp">
		<fieldset id="regbox">
			<legend>직원 추가</legend>
			<label for="employee_id">직원 ID</label>
			<input type="text" name="employee_id"/><br/><br/>
			<label for="first_name">이름</label>
			<input type="text" name="first_name"/><br/><br/>
			<label for="last_name">성</label>
			<input type="text" name="last_name"/><br/><br/>
			<label for="email">이메일</label>
			<input type="text" name="email"/><br/><br/>
			<label for="phone_number">전화번호</label>
			<input type="text" name="phone_number"/><br/><br/>
			<label for="salary">급여</label>
			<input type="text" name="salary"/><br/><br/>			
			<input type="submit" value="추가">
			<input type="reset" value="취소"/>			
		</fieldset>
	</form>

INSERT 할 때 급여 금액을 큰 수를 입력하면 안되는데 10000000을 입력했다가 삽입이 되지 않았다. 
이미 제약조건이 걸려 있었던 것이다. 
제약조건을 꼼꼼히 확인해 봐야함. 
```

# 실행영상

https://youtu.be/ruHCP_7LCl8

# 참고할 만한 사이트
톰캣 다운로드 
https://tomcat.apache.org/
톰캣 8.5버전 설치

## 회고
```
### (+) JAVA에서 톰캣 서버를 통해 웹 서버를 구축할 수 있어 흥미로웠다

### (-) java코드가 아직은 익숙하지 않음

### (!) 이클립스 안에서 웹을 미리 볼 수 있는 점이 좋았다!
