<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual introduction">
			<div class="visual_title_box">
				<h2 class="title">센터소개</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner introduction">
				<div class="title_box">
					<h2 class="title">기업가정신을 갖춘 <span>창조적 인재양성기관</span></h2>
					<div class="top_line"></div>
				</div>
				<div class="introduction_top">
					<div class="introduction_top_img">
						<ol>
							<li>
								<img src="../images/sub/introduction/introduction_img1.png" alt="">
								<p>창업교육</p>
							</li>
							<li class="line">
								<img src="../images/sub/introduction/introduction_img5.png" alt="">
							</li>
							<li>
								<img src="../images/sub/introduction/introduction_img2.png" alt="">
								<p>교육 프로그램 개발</p>
							</li>
							<li class="line">
								<img src="../images/sub/introduction/introduction_img5.png" alt="">
							</li>
							<li>
								<img src="../images/sub/introduction/introduction_img3.png" alt="">
								<p>협력 네트워크 구성</p>
							</li>
							<li class="line">
								<img src="../images/sub/introduction/introduction_img5.png" alt="">
							</li>
							<li>
								<img src="../images/sub/introduction/introduction_img4.png" alt="">
								<p>인프라 환경 조성</p>
							</li>
						</ol>
					</div>
					<p class="introduction_top_txt">한양대학교 ERICA 창업교육센터는 대학 창업의 요람이 되고자 기업가정신을 일깨우기 위한 창업교육 운영, 창업문화확산을 위한 교육 프로그램 개발, 열린 협력체계를 위한 네트워크 구성, 창업활동에 몰두 할 수 있는 온∙오프라인 인프라 환경 조성을 위해 노력하고 있습니다.</p>
				</div>
				<script src="http://openapi.map.naver.com/openapi/v2/maps.js?clientId=tpLIjx0yy8Ld7DKf8pGq"></script>
				<div class="introduction_address">
					<div class="inner">
						<div class="title_box">
							<h2 class="title">찾아오시는 길</h2>
							<div class="top_line"></div>
						</div>
						<div id="nmap"></div>

						<script type="text/javascript">
						var oMap = new nhn.api.map.Map('nmap', {
							point : new nhn.api.map.LatLng(37.2954500, 126.8353500),
							zoom : 12 // 줌 설정(1~14)
						});
						var oSize = new nhn.api.map.Size(28, 37); //아이콘 사이즈
						var oOffset = new nhn.api.map.Size(16, 37); //아이콘 사이즈에 따른 위치 보정
						var oIcon = new nhn.api.map.Icon('http://static.naver.com/maps2/icons/pin_spot2.png', oSize, oOffset);
						oIcon = new nhn.api.map.Icon('http://static.naver.com/maps2/icons/pin_spot2.png', oSize, oOffset);
						var oMarker = new nhn.api.map.Marker(oIcon, { title : '한양대학교 창업교육센터' }); //마커 제목 생성
						oMarker.setPoint(oMap.getCenter()); // 마커 표시할 좌표 선택
						oMap.addOverlay(oMarker); //마커를 지도위에 표시
						//마커 라벨 출력
						oLabel = new nhn.api.map.MarkerLabel(); //마커 라벨 선언
						oMap.addOverlay(oLabel); //마커 라벨 지도에 추가, 기본은 보이지 않는 상태로 추가됨
						oLabel.setVisible(true, oMarker); //마커 라벨 보이기
						</script>
						
						<table class="introduction_addresss_table">
							<tbody>
								<tr>
									<th>Address</th>
									<td>경기도 안산시 상록구 한양대학로 55 창업센터 1층 101호 창업교육센터<br />031-400-4981 / 031-400-4978</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>