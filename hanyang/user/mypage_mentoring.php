<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual login">
			<div class="visual_title_box">
				<h2 class="title">마이페이지</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user mypage">
				<div class="mypage_shortcut_table_wrap">
					<div class="title_box">
						<h2 class="title">멘토링 신청현황</h2>
						<div class="top_line"></div>
					</div>
					<table>
						<caption>멘토링 신청현황</caption>
						<colgroup>
							<col width="75">
							<col width="580">
							<col width="155">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th>No</th>
								<th>제목</th>
								<th>상태</th>
								<th>등록일</th>
							</tr>
							<tr>
								<td>3</td>
								<td>
									<a href="#">김 슬</a>
								</td>
								<td>
									<span class="ing">신청</span>
								</td>
								<td>2017.01.26</td>
							</tr>							
							<tr>
								<td>2</td>
								<td>
									<!-- 답변완료 상태글 클릭시 class="active" 추가 -->
									<a href="#" class="active">마영진</a>
								</td>
								<td>
									<span class="refusal">거절</span>
									<a href="#" class="reason" title="사유보기">사유보기</a>
								</td>
								<td>2017.01.26</td>
							</tr>
							<!-- 답변완료 상태글 클릭시 보이기 -->
							<tr class="reply">
								<td colspan="4">
									<span>현재 한양대 에리카 등급이 아니기때문에 신청 불가능합니다.</span>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>김승국</td>
								<td>
									<span class="clear">승인</span>
								</td>
								<td>2017.01.26</td>
							</tr>
						</tbody>
					</table>
					<a href="#" class="btn_listview" title="목록">목록</a>
					<div class="paging_wrap">

						<!-- class=none 더이상 페이지가 없을때 버튼-->

						<a href="#" class="first"></a>
						<!-- <a href="#" class="first none"></a> -->
						<a href="#" class="prev"></a>
						<!-- <a href="#" class="prev none"></a> -->
						<a href="#" class="on">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#" class="next"></a>
						<!-- <a href="#" class="next none"></a> -->
						<a href="#" class="last"></a>
						<!-- <a href="#" class="last none"></a> -->
					</div>
				</div>
			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>