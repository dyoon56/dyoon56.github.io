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
				<script src="http://openapi.map.naver.com/openapi/v3/maps.js?clientId=aQNFT2XB2McihAnruxwR"></script>
				<div class="introduction_address">
					<div class="inner">
						<div class="title_box">
							<h2 class="title">찾아오시는 길</h2>
							<div class="top_line"></div>
						</div>
						<div id="nmap"></div>

						<script type="text/javascript">
						var map = new naver.maps.Map('nmap', {
						    center: new naver.maps.LatLng(37.2954500, 126.8353500),
						    zoom: 12
						});
						var marker = new naver.maps.Marker({
						    position: new naver.maps.LatLng(37.2954500, 126.8353500),
						    map: map
						});
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