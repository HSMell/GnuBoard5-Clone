<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_PATH.'/head.php');
?>

<div id="wrapper">
    <div id="container_wr">
    <div id="container">
        <!--  -->

<div class="cont_wrap">
	<div class="cont_left">
		<ul class="bxslider">
			<li>
				<div class="slide_text">
					<strong>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</strong>
					<div>지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고,
지속 가능한 농업생태계구축을 위하여 더 좋은 제품 생산에 집중하겠습니다.
					</div>
					<a href="/sub0101.php">VIEW MORE    →</a>
				</div>
			</li>
			<li>
				<div class="slide_text">
					<strong>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</strong>
					<div>지난 40여년간 친환경농업 시장을 선도하며 쌓아온 노하우로 더 나은 서비스를 드리기 위해 노력하고,
지속 가능한 농업생태계구축을 위하여 더 좋은 제품 생산에 집중하겠습니다.
					</div>
					<a href="/sub0101.php">VIEW MORE    →</a>
				</div>
			</li>
			 
		</ul>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.bxslider').bxSlider({ 
			auto: true, 
			speed: 1000, 
			pause: 9000, 
			mode:'fade', 
			autoControls: false, 
			pager:false,
			controls:false,
			});
		});
	</script>


	<div class="cont_right">
		<!-- btn1_wrap -->
		<ul>
			<li>
				<a href="/sub0103.php">
					<strong>비전</strong>
					<p>Vision</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0401.php">
					<strong>구매안내</strong>
					<p>Purchase Guide</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0201.php">
					<strong>미원유박</strong>
					<p>환경친화형 혼합유박</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0203.php">
					<strong>파라다이스</strong>
					<p>친환경 농산물 생산 지정자재</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0204.php">
					<strong>원예특호</strong>
					<p>특수농축공법</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0301.php">
					<strong>우림비료의 특징</strong>
					<p>비료업계의 새로운 패러다임</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/sub0101.php">
					<strong>회사개요</strong>
					<p>방문을 환영합니다</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
			<li>
				<a href="/bbs/board.php?bo_table=history">
					<strong>연혁</strong>
					<p>걸어온 길</p>
					<span class="main_more">VIEW MORE    →</span>
				</a>
			</li>
		</ul>
	</div>


</div><!-- .cont_wrap 끝 -->


<script>
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>



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