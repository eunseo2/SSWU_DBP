### 20180972 김은서

# 개발 환경 소개
```
1. mysql
kaggle 에서 데이터를 가지고와서 db에 저장시킬때, mariadb보다는 mysql에 import하기가 쉬워 선택하게 되었다.
그 방법은 kaggle 데이터를 먼저 csv파일로 저장후 mysql 워크벤치에서 import 시키면 자동으로 table이 만들어진다.
table을 만들때 table의 이름을 설정할 수 있으며  int, text 등 type을 데이터에 맞게 기본값을 넣어준다.
mysql 워크벤치는 DB구조를 시각적으로 보여줄 뿐만 아니라 외부 데이터를 쉽게 import시켜주는 기능 또한 가지고 있어 편리했다.


2. window 웹 서버
window 웹 서버를 선택한 가장 이유는 작업속도와 편리함이다. 
이미 노트북에 윈도우가 깔려있어, 리눅스를 실행하기 위해선 vmware를 통해 작업해야한다.
하지만 vmware은 RAM을 많이 차지하여 노트북 속도가 느려졌다. 
window는 vmware를 쓰지 않아도 되므로 작업속도가 리눅스보다 빨랐다.
또한 리눅스 명렁어들은 평소에 많이 쓰지 않아 불편하나 윈도우는 GUI로 되어있어 쉽게 작업할 수 있어 선택하게 되었다.


3. php,html
php 백엔드 서버 언어를 사용했으며 html 클라이언트 언어를 선택하였다.
html로 웹사이트를 충분히 바꿀 수 있어 css는 따로 사용하지 않았다.

```
![csv파일 워크벤치 이용](https://user-images.githubusercontent.com/70589857/97735170-52145d80-1b1d-11eb-8100-6969992f1f9a.PNG)
<csv파일 mysql 워크벤치에 import>


# 발견한 정보 소개

1. 영화정보 검색(NETFLIX ID로 영화정보 검색) -> 영화정보를 더보고 싶으면 (더보기 클릭)
![영화 ID](https://user-images.githubusercontent.com/70589857/97726463-93ebd680-1b12-11eb-8756-b1a0936a4e2d.PNG)
![id-2](https://user-images.githubusercontent.com/70589857/97726600-bc73d080-1b12-11eb-8735-d90145bc27ab.PNG)
![id-3](https://user-images.githubusercontent.com/70589857/97726920-1b394a00-1b13-11eb-8015-a3d106baa75f.PNG)

2. TV프로그램 검색 (TV 프로그램 제목으로 영화정보 검색 inner join이용 )
![tv-1](https://user-images.githubusercontent.com/70589857/97726963-242a1b80-1b13-11eb-9d70-f50a762fcdb9.PNG)
![tv-2](https://user-images.githubusercontent.com/70589857/97726976-2b512980-1b13-11eb-9b1e-ea233a67a639.PNG)

3. 장르별 영화 추천 ( 장르를 선택하면 30개의 영화를 보여줌)
![장르1](https://user-images.githubusercontent.com/70589857/97727102-576caa80-1b13-11eb-8d9e-95bd9d9dac89.PNG)
![장르2](https://user-images.githubusercontent.com/70589857/97727118-60f61280-1b13-11eb-9562-fd6e76fd2ddd.PNG)


## 실행영상
https://www.youtube.com/watch?v=gf5LGP7twMk
