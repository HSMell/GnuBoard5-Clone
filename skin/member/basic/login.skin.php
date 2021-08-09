<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_PATH.'/head.php');
?>

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
 $(document).ready(function(){ $('.loc1D').text('로그인'); $('.noInfoPageTit').html('<h2><a><b>로그인</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); });</script>
<!-- //현재위치 및 서브메뉴 활성화 설정 -->
    <div id="container_wr">
	
    <div id="container02">
	 
		<div class="sub_top"><h2><span></span>로그인</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
		<div class="sub_page">



<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
    <h1>로그인</h1>

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="http%3A%2F%2F127.0.0.1">

    <fieldset id="login_fs">
        <legend>회원로그인</legend>
        <label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
        <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
        <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">
        <input type="submit" value="로그인" class="btn_submit">
        <input type="checkbox" name="auto_login" id="login_auto_login">
        <label for="login_auto_login">자동로그인</label>
    </fieldset>

    
    <aside id="login_info">
        <h2>회원로그인 안내</h2>
        <div>
            <a href="http://dmonster1349.cafe24.com/bbs/password_lost.php" target="_blank" id="login_password_lost">아이디 비밀번호 찾기</a>
            <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
        </div>
    </aside>

    </form>


</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->


    </div>

    </div>


</div>
<!-- } 콘텐츠 끝 -->
	<div class="m_ft">
		 
		 
		 
			<h3 class="m_ft_tit">Contact</h3>
			<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<th width="50px"><img src="/img/ft_icon01.png" alt="전화" /></th>
					<td>042-285-4100</td>
				</tr>
				<tr>
					<th width="50px"><img src="/img/ft_icon02.png" alt="이메일" /></th>
					<td>042-285-4784 </td>
				</tr>
				<tr>
					<th width="50px"><img src="/img/ft_icon03.png" alt="이메일" /></th>
					<td>I-woolim@nate.com </td>
				</tr>
			</table> -->
			<div class="hd_ft_info"><b>사무실</b><br>
		<em>대전광역시 중구 대종로 223 (석교동)</em><br>
		TEL : 042-285-4781<br>
		FAX :  042-285-4784<br><br>
		<b>공장</b><br>
		<em>세종특별시 연서면 와룡로 497-19 (신대리)</em><br>
		TEL : 044-867-6001<br>
		FAX : 044-867-6003</div>
			<div class="hd_ft_info">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tbody><tr>
						<td width="30px">주소</td>
						<td>대전광역시 중구 대종로 223, (석교동)</td>
					</tr>
					<tr>
						<td>대표</td>
						<td>남경환, 김상배</td>
					</tr>
					 
				</tbody></table>
 			</div>
		<div class="hd_ft_info2">Copyright © All rights reserved</div>
	</div>
<hr>

	<div class="close_menu"><i class="fa fa-times" id="mobile_menu_close"></i></div>
    <div id="aside">
                
		<div class="mobile_menu">
            <ul>
                                <li>
                    <a target="_self" class="gnb_1da">회사소개</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0101.php" target="_self">회사개요</a></li>
                                            <li><a href="/bbs/board.php?bo_table=history" target="_self">연혁</a></li>
                                            <li><a href="/sub0103.php" target="_self">비전</a></li>
                    </ul>
                </li>
                                <li>
                    <a target="_self" class="gnb_1da">제품소개</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0201.php" target="_self">미원유박</a></li>
                                            <li><a href="/sub0203.php" target="_self">파라다이스</a></li>
                                            <li><a href="/sub0204.php" target="_self">원예특호</a></li>
                                            <li><a href="/sub0207.php" target="_self">왕대박</a></li>
                    </ul>
                </li>
                                <li>
                    <a target="_self" class="gnb_1da">우림비료의 특징</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0301.php" target="_self">우림비료의 특징</a></li>
                    </ul>
                </li>
                                <li>
                    <a target="_self" class="gnb_1da">구매안내</a>
					<i class="fa fa-angle-down"></i>
                    <ul>
                        <li><a href="/sub0401.php" target="_self">구매안내</a></li>
                    </ul>
                </li>
                            </ul>
		</div>

<script type="text/javascript">
<!--
$( document ).ready(function(){
	$( ".mobile_menu > ul > li" ).click(function(){
		$( this ).find('ul').toggle( 100 );
	});

	$( "#mobile_menu_close" ).click(function(){
		$( "#aside" ).animate({"left":"-315px"}, 200);
		$( ".aside_bk" ).hide();
		$( ".close_menu" ).animate({"left":"-100px"}, 200);
	});
	$( "#mobile_open" ).click(function(){
		$( "#aside" ).animate({"left":"0px"}, 200);
		$( ".aside_bk" ).show();
		$( ".close_menu" ).animate({"left":"280px"}, 200);
	});

});
//-->
</script>

                    </div>
</div>
<?php
include_once(G5_PATH.'/tail.php');