            </article>
        </section>
    </main>
    
    <!-- 하단 푸터 -->
    <footer>
            <div class="f_inner">
                <nav>
                    <dl>
                        <dt><a href="#" title="미에로">미에로</a></dt>
                        <dd><a href="#" title="브랜드 스토리">브랜드 스토리</a></dd>
                        <dd><a href="#" title="식이섬유 스토리">식이섬유 스토리</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="제품소개">제품소개</a></dt>
                        <dd><a href="#" title="미에로화이바">미에로화이바</a></dd>
                        <dd><a href="#" title="미에로화이바 SPARKING ZERO SUGAR">미에로화이바<br>SPARKING<br>ZERO SUGAR</a></dd>
                        <dd><a href="#" title="헬씨올리고">헬씨올리고</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="미에로 스토리">미에로 스토리</a></dt>
                        <dd><a href="#" title="TV광고">TV광고</a></dd>
                        <dd><a href="#" title="인쇄광고">인쇄광고</a></dd>
                        <dd><a href="#" title="프로모션">프로모션</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="미에로 이벤트">미에로 이벤트</a></dt>
                        <dd><a href="http://nnnyh93.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_event" title="">진행중인 이벤트</a></dd>
                        <dd><a href="#" title="당첨자 발표">당첨자 발표</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="http://nnnyh93.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="">공지사항</a></dt>
                        <dd><a href="3http://nnnyh93.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="">News&Notice</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="">현대약품</a></dt>
                    </dl>
                    <dl class="sns">
                        <dt>Connect with us</dt>
                        <dd>
                            <a href="#" title="페이스북"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="인스타그램"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="페이스북"><i class="fab fa-youtube"></i></a>
                        </dd>
                    </dl>
                </nav>
            </div>

            <div class="f_copy">
                <a href="../../0311/sub_h.php" title="상단 바로가기"><img src="http://nnnyh93.dothome.co.kr/0311/images/f_logo.png" alt="하단로고"></a>
                <span>&copy; 2018 MIERO FIBER . All Rights Reserved.
                </span>
            </div>
        </footer>
        <div class="t_btn">
            <a href="../../0311/index.html" title="탑버튼"><img src="http://nnnyh93.dothome.co.kr/0311/images/top_up.png" alt="탑버튼"></a>
        </div>
    
        <!-- 제이쿼리 라이브러리 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                //1. 변수선언
                let mnu = $('.gnb > ul > li > a '); //메인메뉴

                //2. 메인메뉴 클릭시 서브메뉴 보이게 / 보일때 클릭하면 숨김
                mnu.click(function(){
                    //$('.sub').hide(); // 보이는 서브메뉴는 모두 숨기고
                    //$(this).next('.sub').toggle(); //선택한 메인메뉴의 다음 요소 sub가 보이거나 숨기게 한다.

                    //선택한 a요소의 다음 요소인 .sub를 나오거나 숨기게하고 부모요소의 형제 요소인 li태그의 자손 .sub를 숨긴다.
                    $(this).next('.sub').toggle().parent().siblings().find('.sub').hide();
                });

                //main을 클릭하면 .sub를 숨긴다
                $('main').click(function(){
                    $('.sub').hide();
                });
            });
        </script>
    </body>
</html>