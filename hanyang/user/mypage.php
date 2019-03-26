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
				<div class="mypage_table_wrap">
					<div class="title_box">
						<h2 class="title">회원정보</h2>
						<div class="top_line"></div>
					</div>
					<div class="login_box">
						<form>
							<fieldset>
							<legend>회원정보</legend>
								<div class="mypage_inner">
									<table>
										<caption>회원정보</caption>
										<colgroup>
											<col width="140">
											<col width="400">
											<col width="140">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>아이디</th>
												<td class="mypage_id">adup</td>
												<th>이름</th>
												<td class="mypage_name">김동근</td>
											</tr>
											<tr>
												<th>비밀번호</th>
												<td class="mypage_pw">
													********
													<a href="../user/change_password.php" class="btn_mypage_change_pw" title="비밀번호 변경">비밀번호 변경</a>
												</td>
												<th>전화번호</th>
												<td class="mypage_phone">02-6235-2584</td>
											</tr>
											<tr>
												<th>이메일</th>
												<td class="mypage_email"><a href="#">ddkwm@gamil.com</a></td>
												<th>소속(추가정보)</th>
												<td></td>
											</tr>
											<tr>
												<th>회원구분</th>
												<td colspan="3" class="mypage_belongto">
													<span>ERICA회원</span>
													<img src="../images/sub/login/erica_icon1.png" alt="">
													<img src="../images/sub/login/erica_icon2.png" alt="">
													<img src="../images/sub/login/erica_icon3.png" alt="">
													<img src="../images/sub/login/erica_icon4.png" alt="">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="bottom">
									<div class="newsletter_wrap">
										<label for="check_mypage_newsletter">
											<input type="checkbox" id="check_mypage_newsletter">
											<span></span>
											&nbsp;뉴스레터 받기
										</label>
									</div>
									<div class="btn_wrap">
										<button type="submit" class="btn_mypage_withdrawal" onclick="confirm('탈퇴 하시겠습니까?')" title="탈퇴">탈퇴</button>
										<button type="submit" class="btn_mypage_modification" onclick="confirm('수정 하시겠습니까?')" title="수정">수정</button>
										<button type="reset" class="btn_mypage_cancel" title="취소">취소</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div><!-- mypage_table_wrap End -->
				<div class="mypage_shortcut_wrap">
					<div class="title_box">
						<h2 class="title">바로가기 메뉴</h2>
						<div class="top_line"></div>
					</div>
					<div class="mypage_shortcut_inner">
						<a href="#" class="shortcut_box">
							<dl>
								<dt>
									<img src="../images/sub/login/mypage_club_icon.png" alt="">
								</dt>
								<dd class="dashed"></dd>
								<dd class="shortcut_name">
									창업동아리<br />테트리스
								</dd>
							</dl>
						</a>
						<a href="mypage_policy.php" class="shortcut_box">
							<dl>
								<dt>
									<img src="../images/sub/login/mypage_policy_icon.png" alt="">
								</dt>
								<dd class="dashed"></dd>
								<dd class="shortcut_name">
									정책지원 현황
								</dd>
							</dl>
						</a>
						<a href="mypage_inquiry.php" class="shortcut_box">
							<dl>
								<dt>
									<img src="../images/sub/login/mypage_inquiry_icon.png" alt="">
								</dt>
								<dd class="dashed"></dd>
								<dd class="shortcut_name">
									문의사항 내역
								</dd>
							</dl>
						</a>
						<a href="mypage_event.php" class="shortcut_box">
							<dl>
								<dt>
									<img src="../images/sub/login/mypage_event_icon.png" alt="">
								</dt>
								<dd class="dashed"></dd>
								<dd class="shortcut_name">
									이벤트 신청현황
								</dd>
							</dl>
						</a>
						<a href="mypage_mentoring.php" class="shortcut_box">
							<dl>
								<dt>
									<img src="../images/sub/login/mypage_mentoring_icon.png" alt="">
								</dt>
								<dd class="dashed"></dd>
								<dd class="shortcut_name">
									멘토링 신청현황
								</dd>
							</dl>
						</a>
						<a href="mypage_partnership.php" class="shortcut_box">
							<dl>
								<dt>
									<img src="../images/sub/login/mypage_partnership_icon.png" alt="">
								</dt>
								<dd class="dashed"></dd>
								<dd class="shortcut_name">
									파트너쉽 신청현황
								</dd>
							</dl>
						</a>
					</div>
				</div><!-- mypage_shortcut_wrap End -->
			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>