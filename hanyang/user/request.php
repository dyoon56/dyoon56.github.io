<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual login">
			<div class="visual_title_box">
				<h2 class="title">문의사항</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user">

				<!-- 비회원 문의사항 작성 -->
				<div class="request_fill_nonmember request_fill">
					<table>
						<caption>문의사항</caption>
						<colgroup>
							<col width="85">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th>
									<label for="request_name_nonmember">이름</label>
								</th>
								<td>
									<input type="text" id="request_name_nonmember">
								</td>
							</tr>
							<tr>
								<th>
									<label for="input_request_email1_nonmember">이메일</label>
								</th>
								<td>
									<input type="text" id="input_request_email1_nonmember">
									@
									<input type="text" id="input_request_email2_nonmember">
									<div class="select_mail">
										<label for="select_request_email_nonmember">직접입력</label>
										<select id="select_request_email_nonmember">
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
									<label for="request_textarea_nonmember">내용</label>
								</th>
								<td>
									<textarea id="request_textarea_nonmember"></textarea>
								</td>
							</tr>
						</tbody>
					</table>
					<button type="submit" class="btn_request_send" title="보내기">보내기</button>	
				</div>

				<!-- 회원 문의사항 작성 -->
				<div class="request_fill_member request_fill">
					<table>
						<caption>문의사항</caption>
						<colgroup>
							<col width="85">
							<col>
						</colgroup>
						<tbody>
							<tr>
								<th>
									이름
								</th>
								<td class="member_name">
									<span>홍길동</span>
								</td>
							</tr>
							<tr>
								<th>
									이메일
								</th>
								<td class="member_mail">
									knowledge@gmail.com
								</td>
							</tr>
							<tr>
								<th>
									<label for="request_textarea_member">내용</label>
								</th>
								<td>
									<textarea id="request_textarea_member"></textarea>
								</td>
							</tr>
						</tbody>
					</table>
					<button type="submit" class="btn_request_send" title="보내기">보내기</button>	
				</div>

				<!-- 문의사항 접수 완료 -->
				<div class="join_completion completion">
					<div class="inner">
						<p class="title_completion">
							문의사항 접수가 완료되었습니다.
						</p>
						<img src="../images/sub/login/join_complete.png" alt="">
					</div>
					<div class="bottom">
						<a href="/index.php" class="move_main" title="메인화면으로 이동">메인화면으로 이동</a>
					</div>
				</div>
				
			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>