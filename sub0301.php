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
	$(function(){$('.snb.co_idtestPage, .snb .snb2d_co_idtestPage').addClass('active');});/*  컨텐츠관리 : co_idtestPage  */
	$(document).ready(function(){ if ( $("#snb > li").is(".snb.active") ) { $('.loc1D').text( $('#snb .co_idtestPage h2 a b').text());$('.loc2D').html( $('.snb2d_co_idtestPage a b').html());$('.faArr').html('<i class="fa fa-angle-right"></i>');var index = $("#snb > li").index("#snb > li.active");$( "#page_title" ).addClass("subTopBg_03"); } else { $('.loc1D').text('우림비료의 특징'); $('.noInfoPageTit').html('<h2><a><b>우림비료의 특징</b><sub>dmonster1349.cafe24.com</sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); } });  </script>
	<!-- //현재위치 및 서브메뉴 활성화 설정 -->
		<div id="container_wr">
		
		<div id="container02">
		 
			<div class="sub_top"><h2><span></span>우림비료의 특징</h2><p>우리의 건강한 먹거리를 위해 힘쓰겠습니다.</p></div>
			<div class="sub_page">
	
	
	 
		<div class="sub_con sub0301">
			 <div class="sub0301_tit"> <img src="/img/sub0301_img01.png"   alt="" />
			
				
			 <p>시작부터 지금까지 오로지 한 길만을 걸어온 
			 우림의 발자취는 또 한 걸음 한 걸음 비료업계의 
		   새로운 패러다임을 만들어 갑니다.</p></div>
		   <p class="sub0301_txt">고품질 원재료를 엄선하며, 우림만의 최신공법으로 최상의 비료를 제조합니다.
	
	우림비료에는 유기물이 풍부하게 함유되어 있어,미생물 활동을 활발하게 하며
	토양에 새로운 활력과 영양을 줍니다.</p>
		</div>
		 
		 
	 
	
	<script>$(document).ready(function(){$('#snb > li:nth-child(3)').addClass("co_idtestPage active");$('#snb > li:nth-child(3) > ul > li:nth-child(1)').addClass("snb2d_co_idtestPage  active");});</script>
	
	
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