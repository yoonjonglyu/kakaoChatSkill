# 카카오톡 챗봇 스킬 플랫폼

(주)페르소나 라는 회사에 근무하면서 여러 업무을 맡게 되었는데
그중 하나가 챗봇개발이다. 이건 챗봇개발과정에서 발생하는 여러가지 반복작업을 보고 반복노동을 최소화시킬 플랫폼 안의 플랫폼(라이브러리)을 만들어 보자는 생각으로 만드는 코드다.
추신 : 프레임워크가 될거 같긴하다.


# 사용 언어셋

-PHP


# 내용구성

1. main
- 루트파일(init메인)
2. path
- 경로을 담는 파일
3. data
- 기본적인 데이터베이스 연결과 상수 챗봇 폼등이 포함된 dir
4. modules
- 기본적인 챗봇이 아닌 기능적인 부분이 들어있는 dir
5. node
- 루트에서 발생하는 분기 트리 dir 노트트리 형식으로 되어있다.
6. assets
- 스태틱파일들 (img & other)
7. tests
- 개발tests용 구성
8. doc
- 개발문서 & sql
- (sql을 cms처럼 실행해서 설치하는 형태로 만드는게 사용자 편의성에 더 좋지 않을까? 생각중이다.)



## 개발 방향
- 어떻게 해야 반복작업을 최소화 시킬 수 있을지 어떻게 하면 추후 고도화하거나 기능개발을 할때 리팩토링하기 좋을까?
- 어떻게 해야 중복코드를 최대한 줄이고 자동화 할 수 있을까 정도 생각중이다. 깔끔하고 사용자가 편안해야하고 간편하면서도
언제든지 고도화 가능하게 개발해야한다. 


## authour

Isa(ryuyoonjong)

## LICENSE

-M.I.T 
- 모두 본 저자에게 있습니다.
