# 카카오챗봇 데이터베이스 가이드
    chatbot skill database guide line

## static

    챗봇의 정적인 데이터를 입력하는 table 설명 및 사용안내

    1. table은 idx(int11),static_nameplate(text),static_contents(text),static_contents(text),static_relay(text),static_link(text),static_type(varchar30),static_order(int11),
    static_node(int11),static_extra(text) 으로 총 9 개의 필드로 구성되어있다.

    2. idx는 기본키에 해당하며 유일하다. 또, static이라는 머릿말은 다른 칼럼들과 구분 짓는 머릿말이다.
    
    3. nameplate, contents, relay, link 칼럼은 각각 스킬데이터에 사용되는 직접적인 데이터가 담기는 필드이다.

    4. type, order, node, extra 칼럼은 각각 스킬데이터의 종류를 구분 짓는 간접적인 데이터가 담기는 필드이다.

    5. nameplate는 label, title등의 스킬 데이터를 저장한다.