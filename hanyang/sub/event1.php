<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set_event.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual event">
			<div class="visual_title_box">
				<h2 class="title">이벤트</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub event">

				<!-- 이벤트 참여신청 테이블 -->
				<div class="title_box">
					<h2 class="title">이벤트 참여 신청</h2>
					<div class="top_line"></div>
				</div>
				<div class="event_app_table">
					<form>
						<fieldset>
						<legend>이벤트 참여신청</legend>
							<table>
								<caption>이벤트 참여신청</caption>
								<colgroup>
									<col width="130">
									<col>
									<col width="130">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th>
											<label for="user_name">이름</label>
										</th>
										<td width="290">
											<input type="text" id="user_name">
										</td>
										<th>
											<label for="user_class">학번</label>
										</th>
										<td>
											<input type="text" id="user_class">
										</td>
									</tr>
									<tr>
										<th>
											<label for="user_phone">연락처</label>
										</th>
										<td>
											<div class="select_phone select_cus">
												<label for="user_phone">선택</label>
												<select id="user_phone">
													<option value="choice">선택</option>
													<option value="010">010</option>
													<option value="011">011</option>
													<option value="016">016</option>
													<option value="017">017</option>
													<option value="018">018</option>
													<option value="019">019</option>
												</select>
											</div>
											-
											<input type="text" id="user_phone1">
											-
											<input type="text" id="user_phone2">
										</td>
										<th>
											<label for="user_email1">이메일</label>
										</th>
										<td>
											<input type="text" id="user_email1">
											@
											<input type="text" id="user_email2">
											<div class="select_mail">
												<label for="user_email">직접입력</label>
												<select id="user_email">
													<option value="">직접입력</option>
													<option value="naver.com">naver.com</option>
													<option value="nate.com">nate.com</option>
													<option value="hotmail.com">hotmail.com</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<th>
											<label for="representative_name">대표자명</label>
										</th>
										<td colspan="3">
											<input type="text" id="representative_name">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_event_file">첨부파일</label>
										</th>
										<td colspan="3">
											<div class="filebox">
												<input class="upload-name" id="input_event_file" value="" readonly />
												<label for="ex_filename">찾아보기</label>
												<input type="file" id="ex_filename" class="upload-hidden">
											</div>
										</td>
									</tr>
									<tr>
										<th>
											<label for="event_content">내용</label>
										</th>
										<td colspan="3">
											<textarea id="event_content"></textarea>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="btn_wrap">
								<button type="reset" class="btn_cancel" title="취소">취소</button>
								<button type="submit" class="btn_register" onclick="confirm('등록하시겠습니까?')" title="등록">등록</button>
							</div>
						</fieldset>
					</form>
				</div>
				
				<!-- 이벤트 글보기 -->
				<div class="title_box">
					<h2 class="title">이벤트 참여 신청</h2>
					<div class="top_line"></div>
				</div>
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
								<th colspan="4">
									<span class="in_school">교내</span>
									<!-- <span class="out_school">교외</span> -->
									<span class="title">2017 창업캠프 참여신청</span>
								</th>
							</tr>
							<tr class="table_hits">
								<td colspan="3" class="table_hits_td3">조회 <span class="hits">69</span></td>
								<td width="110" class="table_hits_td4"><span class="date">2017-01-20</span></td>
							</tr>
							<tr class="table_content">
								<td colspan="4">
									<div class="table_content_div">
										<div class="table_content_inner">
											<h3 class="event_title">2017 창업캠프</h3>
											<img src="../images/sub/event/event_ex.jpg" alt="">
											<p class="event_date">
												2017년 01월 20일 | 09:00 ~ 18:00<br />B1 이벤트홀 Make ( ~45석 )
											</p>
											<p class="event_content">
												세계최대 2017창업캠프! 창업역량을 강화할 수 있는기회입니다.<br />많은 참여 부탁드립니다.<br /><br />* 참여는 홈페이지를 참고해 주세요
											</p>
											<button type="button" class="btn_app" title="신청하기">신청하기</button>
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

				<!-- 이벤트 달력 -->
				<div id='calendar'></div>

				<!-- 이벤트 참여신청 완료 -->
				<div class="title_box">
					<h2 class="title">이벤트 참여 신청</h2>
					<div class="top_line"></div>
				</div>
				<div class="event_app_completion">
					<p class="title_completion">
						신청이 완료되었습니다.
					</p>
					<p class="title_contact">문의 031-400-4981 / <a href="#">changup@hanyang.ac.kr</a></p>
					<img src="../images/sub/event/event_completion.png" alt="">
					<a href="/index.php" class="move_main" title="메인화면으로 이동">메인화면으로 이동</a>
				</div> 

				<!-- 모든 팝업 띄울때 최하단 <div class="bg"></div> 같이 띄우기 
					*footer.php에 삽입돼있습니다.*
				-->
				
				<!-- 이벤트 팝업 -->
				<div class="event_popup popup">
					<table>
						<caption>2017 창업캠프 팝업</caption>
						<tbody>
							<tr class="table_content">
								<td colspan="3">
									<h3 class="event_title">2017 창업캠프</h3>
									<div class="table_content_inner">
										<img src="../images/sub/event/event_ex.jpg" alt="">
										<p class="event_date">
											2017년 01월 20일 | 09:00 ~ 18:00<br />B1 이벤트홀 Make ( ~45석 )
										</p>
										<p class="event_content">
											세계최대 2017창업캠프! 창업역량을 강화할 수 있는기회입니다.<br />많은 참여 부탁드립니다.<br /><br />* 참여는 홈페이지를 참고해 주세요
										</p>
									</div>
									<div class="bar"></div>
									<a href="#" class="btn_detail_view" title="자세히 보기">자세히 보기</a>
								</td>
							</tr>
						</tbody>
					</table>
					<button type="button" class="close" title="닫기"></button>
				</div>

			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>