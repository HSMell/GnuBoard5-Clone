<!-- 콘텐츠 시작 { -->
   
    <div id="wrapper02">
	
    <!-- SNB // -->
    <div class="left_menu">
                    <ul id="snb"><li class="snb    bo_tablehistory  "><h2><a href="/sub0101.php" target="_self"><b>회사소개</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0101.php" target="_self" > 회사개요</b></a></li><li class="snb2d snb2d_bo_tablehistory"><a href="/bbs/board.php?bo_table=history" target="_self" > 연혁</b></a></li><li class="snb2d snb2d_"><a href="/sub0103.php" target="_self" > 비전</b></a></li></ul></li><li class="snb       "><h2><a href="/sub0201.php" target="_self"><b>제품소개</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0201.php" target="_self" > 미원유박</b></a></li><li class="snb2d snb2d_"><a href="/sub0203.php" target="_self" > 파라다이스</b></a></li><li class="snb2d snb2d_"><a href="/sub0204.php" target="_self" > 원예특호</b></a></li><li class="snb2d snb2d_"><a href="/sub0207.php" target="_self" > 왕대박</b></a></li></ul></li><li class="snb    "><h2><a href="/sub0301.php" target="_self"><b>우림비료의 특징</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0301.php" target="_self" > 우림비료의 특징</b></a></li></ul></li><li class="snb    "><h2><a href="/sub0401.php" target="_self"><b>구매안내</b></a></h2><em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul"><li class="snb2d snb2d_"><a href="/sub0401.php" target="_self" > 구매안내</b></a></li></ul></li></ul>
            <!-- // SNB -->
    </div>
    
    <!-- 현재위치 및 서브메뉴 활성화 설정// -->
    <script>
    $(function(){$('.snb.gr_id, .snb .snb2d_gr_id').addClass('active');});/*  그룹아이디 : gr_id  */
     $(document).ready(function(){ $('.loc1D').text('회원가입약관'); $('.noInfoPageTit').html('<h2><a><b>회원가입약관</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); });</script>
    <!-- //현재위치 및 서브메뉴 활성화 설정 -->
        <div id="container_wr">
        
        <div id="container02">
         
            <div class="sub_top"><h2><span></span>회원가입약관</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
            <div class="sub_page">
    
    
    
    <!-- 회원가입약관 동의 시작 { -->
    <div>
    
        
        <form  name="fregister" id="fregister" action="http://dmonster1349.cafe24.com/bbs/register_form.php" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">
    
        <p>회원가입약관 및 개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.</p>
        <div id="fregister_chkall">
            <label for="chk_all">전체선택</label>
            <input type="checkbox" name="chk_all"  value="1"  id="chk_all">
    
        </div>
        <section id="fregister_term">
            <h2><i class="fa fa-check-square-o" aria-hidden="true"></i> 회원가입약관</h2>
            <textarea readonly>해당 홈페이지에 맞는 회원가입약관을 입력합니다.</textarea>
            <fieldset class="fregister_agree">
                <label for="agree11">회원가입약관의 내용에 동의합니다.</label>
                <input type="checkbox" name="agree" value="1" id="agree11">
            </fieldset>
        </section>
    
        <section id="fregister_private">
            <h2><i class="fa fa-check-square-o" aria-hidden="true"></i> 개인정보처리방침안내</h2>
            <div>
                <table>
                    <caption>개인정보처리방침안내</caption>
                    <thead>
                    <tr>
                        <th>목적</th>
                        <th>항목</th>
                        <th>보유기간</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>이용자 식별 및 본인여부 확인</td>
                        <td>아이디, 이름, 비밀번호</td>
                        <td>회원 탈퇴 시까지</td>
                    </tr>
                    <tr>
                        <td>고객서비스 이용에 관한 통지,<br>CS대응을 위한 이용자 식별</td>
                        <td>연락처 (이메일, 휴대전화번호)</td>
                        <td>회원 탈퇴 시까지</td>
                    </tr>
                    </tbody>
                </table>
            </div>
    
            <fieldset class="fregister_agree">
                <label for="agree21">개인정보처리방침안내의 내용에 동의합니다.</label>
                <input type="checkbox" name="agree2" value="1" id="agree21">
            </fieldset>
        </section>
    
        <div class="btn_confirm">
            <input type="submit" class="btn_submit" value="회원가입">
        </div>
    
        </form>
    
        <script>
        function fregister_submit(f)
        {
            if (!f.agree.checked) {
                alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
                f.agree.focus();
                return false;
            }
    
            if (!f.agree2.checked) {
                alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
                f.agree2.focus();
                return false;
            }
    
            return true;
        }
        
        jQuery(function($){
            // 모두선택
            $("input[name=chk_all]").click(function() {
                if ($(this).prop('checked')) {
                    $("input[name^=agree]").prop('checked', true);
                } else {
                    $("input[name^=agree]").prop("checked", false);
                }
            });
        });
    
        </script>
    </div>
    <!-- } 회원가입 약관 동의 끝 -->
    
    
        </div>
    
        </div>
    
    
    </div>
    <!-- } 콘텐츠 끝 -->