<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual newsroom">
			<div class="visual_title_box">
				<h2 class="title">NEWS ROOM</h2>
				<div class="top_line"></div>
				<ul class="sub_visual_btn_wrap">
					<li>
						<a href="../sub/center_notice.php" title="공지사항">
		  					공지사항
		  				</a>
					</li>
					<li>
						<a href="../sub/center_newsroom.php" title="언론보도">
		  					언론보도
		  				</a>
					</li>
					<li>
						<a href="../sub/center_gallery.php" title="갤러리">
		  					갤러리
		  				</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub newsroom">
				<div class="title_box">
					<h2 class="title">공지사항</h2>
					<div class="top_line"></div>
				</div>
				<!-- 게시판글보기 -->
				<div class="event_app_borad_view">
					<table>
						<caption>게시판글보기</caption>
						<colgroup>
							<col width="115">
							<col>
							<col>
							<col width="110">
						</colgroup>
						<tbody>
							<tr class="table_title">
								<th class="category">[ 공지/뉴스 ]</th>
								<th colspan="3">
									<span class="title">2017 창업캠프 참여신청</span>
								</th>
							</tr>
							<tr class="table_hits">
								<td class="table_hits_td1">첨부파일</td>
								<td class="table_hits_td2">
									<a href="#" class="attached_file">1학기 창업휴학제 신청 접수.hwp</a>
								</td>
								<td class="table_hits_td3">조회 <span class="hits">69</span></td>
								<td width="110" class="table_hits_td4"><span class="date">2017-01-20</span></td>
							</tr>
							<tr class="table_content">
								<td colspan="4">
									<div class="table_content_div">
										<div class="table_content_inner">
											<img src="../images/sub/newsroom/newsroom_ex.jpg" alt="">
											<p class="event_content">
												&lt;창업휴학제 공지&gt;<br />창업교육센터는 창업을 진행하는 학생들의 학업 병행 부담을 덜고자, 창업휴학제를 실시하고 있습니다.<br />다음과 같이 2017-1학기 창업휴학 신청을 공지합니다.
											</p>
											<span class="attached_file_name">1학기 창업휴학제 신청 접수.hwp</span>
											<a href="#" class="btn_attached_file" title="다운받기">다운받기</a>
										</div>
									</div>
								</td>
							</tr>
							<tr class="prev_view">
								<td>이전글<span class="prev_arrow"></span></td>
								<td colspan="2"><a href="#">SAFERICA 아이디어 경진대회</a></td>
								<td>2017-01-20</td>
							</tr>
							<tr class="next_view">
								<td>다음글<span class="next_arrow"></span></td>
								<td colspan="2"><a href="#">2017년도 창업지원사업</a></td>
								<td>2017-01-20</td>
							</tr>
						</tbody>
					</table>
					<a href="#" class="btn_listview" title="목록">목록</a>
				</div>

				<div class="board_list">

					<!-- 공지사항 게시판 리스트 -->
					<div class="notice_wrap">
						<table>
							<caption>게시판</caption>
							<colgroup>
								<col width="105">
								<col width="610">
								<col width="140">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th>
										<span>번호</span>
									</th>
									<th>
										<span>제목</span>
									</th>
									<th>
										<span>등록일</span>
									</th>
									<th>
										<span>조회수</span>
									</th>
								</tr>
								<tr>
									<td>10</td>
									<td><a href="#">2017-2학기 SID 오디션 결선 공고</a></td>
									<td>2017.01.26</td>
									<td>910</td>
								</tr>
								<tr>
									<td>9</td>
									<td><a href="#">2017년도 창업지원사업 공지</a></td>
									<td>2017.01.26</td>
									<td>801</td>
								</tr>
								<tr>
									<td>8</td>
									<td><a href="#">2017 창조경제박람회 참가 스타트업</a></td>
									<td>2017.01.26</td>
									<td>890</td>
								</tr>
								<tr>
									<td>7</td>
									<td><a href="#">2017-2학기 SID 오디션 결선 공고</a></td>
									<td>2017.01.26</td>
									<td>801</td>
								</tr>
								<tr>
									<td>9</td>
									<td><a href="#">2017년도 창업지원사업 공지</a></td>
									<td>2017.01.26</td>
									<td>801</td>
								</tr>
							</tbody>
						</table>
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
						<div class="search_wrap">
							<label for="input_search_notice" class="blind">검색어입력</label>
							<input type="search" id="input_search_notice">
							<button type="submit" class="btn_search" title="검색">검색</button>
						</div>
					</div>
				</div>
			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>