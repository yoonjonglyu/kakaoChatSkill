# 개발문서

## 일지
기본적인 설계는 끝났다 세부적인 설정이 남은거 같다. 블록아이디는 상수파일에 저장하고 챗봇에 들어갈 데이터들은 db에서 끌어온다. img파일은 계층별로 만들어진 폴더에
규칙을 가지고 집어넣는다. sql은 따로 설치하는 프로그램 식으로 만들어서 서버에서 실행해서 sql을 실행하는 방향으로 가는게 맞는거 같다. db까지 생성하는 단계는 권한문제로 안되는 환경이
있을 수 있으니 테이블 셋팅정도하는 방향으로 만들면 될거같다.
기능은 항상 독립적으로 구현되어서 모듈로 가져다 쓸 수 있어야한다.