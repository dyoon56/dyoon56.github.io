<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual proposals">
			<div class="visual_title_box">
				<h2 class="title">제휴·제안</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user">
				
				<!-- 제휴·제안 작성 -->
				<div class="proposals_fill">
					<p>
						ERICA 캠퍼스 창업교육센터와 함께하고자 하는 내용에 대해서 제안해주시기 바랍니다.<br />회사명, 담당자, 연락처, 제휴/제안에 대한 내용을 적어주시기 바라며 내용을 정확히 입력하시지 않을 경우 답변이 가지 않을 수 있음을 양지하시기 바랍니다.
					</p>
					<table>
						<caption>제휴·제안</caption>
						<colgroup>
							<col width="135">
							<col>
							<col width="135">
							<col>
						</colgroup>
						<tr>
							<th>
								<label for="input_proposals_name">이름</label>
							</th>
							<td>
								<input type="text" id="input_proposals_name">
							</td>
							<th>
								<label for="input_proposals_company">회사명</label>
							</th>
							<td>
								<input type="text" id="input_proposals_company">
							</td>
						</tr>
						<tr>
							<th>
								<label for="input_proposals_email1">이메일</label>
							</th>
							<td>
								<input type="text" id="input_proposals_email1">
									@
								<input type="text" id="input_proposals_email2">
								<div class="select_mail">
									<label for="select_proposals_email">직접입력</label>
									<select id="select_proposals_email">
										<option value="">직접입력</option>
										<option value="naver.com">naver.com</option>
										<option value="nate.com">nate.com</option>
										<option value="hotmail.com">hotmail.com</option>
									</select>
								</div>
							</td>
							<th>
								<label for="input_proposals_phone1">연락처</label>
							</th>
							<td>
								<div class="select_phone select_cus">
									<label for="select_proposals_phone">선택</label>
									<select id="select_proposals_phone">
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
								<input type="text" id="input_proposals_phone1">
								-
								<input type="text" id="input_proposals_phone2">
							</td>
						</tr>
						<tr>
							<th>
								<label for="input_proposals_title">제목</label>
							</th>
							<td colspan="3">
								<input type="text" id="input_proposals_title">
							</td>
						</tr>
						<tr>
							<th>
								<label for="proposals_textarea">내용</label>
							</th>
							<td colspan="3">
								<textarea id="proposals_textarea"></textarea>
							</td>
						</tr>
						<tr>
							<th>
								<label for="input_proposals_file">첨부파일</label>
							</th>
							<td colspan="3">
								<div class="filebox">
									<input class="upload-name" id="input_proposals_file" value="" readonly />
									<label for="proposals_filename">파일선택</label>
									<input type="file" id="proposals_filename" class="upload-hidden">
								</div>
							</td>
						</tr>
					</table>
					<button type="submit" title="제출하기" class="btn_proposals_send">제출하기</button>
				</div>

				<!-- 제휴제안 접수 완료 -->
				<div class="proposals_completion completion">
					<div class="inner">
						<p class="title_completion">
							제휴∙제안 접수가 완료되었습니다.
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