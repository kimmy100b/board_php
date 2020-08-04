# php로 만든 게시판

## 프로젝트 소개
PHP, mySQL을 이용하여 만든 게시판 프로젝트입니다.

## 개발인원
1명(개인 프로젝트)

## 개발 기간
2020.07.22 - 

## 핵심기능
- 회원 가입
- 로그인
- 게시판 CRUD
- 비밀 게시판
- 댓글 기능


## 개발환경 
- 개발환경 : Windows 10 Enterprise x64
- 개발도구 : VScode, github, HeidiSQL
- 구성환경 : HTML, CSS, PHP

## 실행 스크린 샷

## 프로젝트 진행 중 후회되는 점
### include를 사용하지 않았던 것
- include를 사용했더라면 좀 더 쉽고 편리하게 개발했을 것이고, 코드를 보기에도 쉬웠을 것이다.

### MVC 패턴으로 분리되어서 코딩하지 않았던 것
- 나중에 웹 디자인에 하게 된다면 php언어가 보이는 화면에 많이 없는 것이 좋다.(웹 디자이너들은 php언어를 모르는 경우가 많기 때문에)
- 삽입, 수정, 삭제 기능을 수행할 때 mode로 GET이나 POST로 보내서 한 파일에서 작업하는 것이 좋다.