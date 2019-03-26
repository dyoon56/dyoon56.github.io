<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual club">
			<div class="visual_title_box">
				<h2 class="title">창업동아리</h2>
				<div class="top_line"></div>
				<ul class="sub_visual_btn_wrap">
					<li>
						<a href="../sub/club_guide.php" title="지원사업 안내">
		  					지원사업 안내
		  				</a>
					</li>
					<li>
						<a href="../sub/club_current_state.php" title="창업동아리 현황">
		  					창업동아리 현황
		  				</a>
					</li>
					<li>
						<a href="../sub/club_app.php" title="창업동아리 신청">
		  					창업동아리 신청
		  				</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub">
				<div class="title_box">
					<h2 class="title">지원항목 요청</h2>
					<div class="top_line"></div>
				</div>
				<div class="club_request_wrap">
					<script>
						$(document).ready(function(){
							var location_search = location.search;
							var search = location_search.split('?')[1];
							var option_length = $('option').length;

							for(var i=1; i<option_length; i++){
								if(search==('lv'+i)){
									$('#select_type').val('lv'+i).trigger('change');
								}
							}
						});
					</script>
					<form>
						<fieldset>
							<legend>지원항목 요청</legend>
							<table>
								<caption>지원항목 요청</caption>
								<colgroup>
									<col width="135">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th>
											요청구분
										</th>
										<td>
											<div class="select_type select_cus">
												<label for="select_type">선택하기</label>
												<select id="select_type">
													<option value="">선택하기</option>
													<option value="lv1">공동공간</option>
													<option value="lv2">지원금(학기당)</option>
													<option value="lv3">지재권 확보</option>
													<option value="lv4">크라우드펀딩</option>
													<option value="lv5">엑셀러레이팅</option>
												</select>
											</div>
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_club_title">신청제목</label>
										</th>
										<td>
											<input type="text" id="input_club_title">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_club_money">신청금액</label>
										</th>
										<td>
											<input type="text" id="input_club_money">
										</td>
									</tr>
									<tr>
										<th>
											<label for="textarea_club_content">요청내용</label>
										</th>
										<td>
											<textarea id="textarea_club_content"></textarea>
										</td>
									</tr>
									<tr>
										<th>
											<label for="textarea_club_reason">필요사유</label>
										</th>
										<td>
											<textarea id="textarea_club_reason"></textarea>
										</td>
									</tr>
									<tr>
										<th>첨부파일</th>
										<td>
											<div class="club_filbox_wrap">
												<div class="filebox">
													<input class="upload-name" value="" readonly />
													<label for="club_filename1">파일선택</label>
													<input type="file" id="club_filename1" class="upload-hidden">
													<button type="button" class="add_file"></button>
												</div>
												<div class="filebox">
													<input class="upload-name" value="" readonly />
													<label for="club_filename2">파일선택</label>
													<input type="file" id="club_filename2" class="upload-hidden">
													<button type="button" class="remove_file"></button>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="btn_wrap">
								<button type="reset" class="btn_cancel" title="취소">취소</button>
								<button type="submit" class="btn_temporary" onclick="confirm('임시저장 하시겠습니까?')" title="임시저장">임시저장</button>
								<button type="submit" class="btn_send" onclick="confirm('제출 하시겠습니까?')" title="제출하기">제출하기</button>
							</div>
						</fieldset>
					</form>
				</div>

				<!-- 지원항목 요청 완료 -->
				<div class="title_box">
					<h2 class="title">지원항목 요청</h2>
					<div class="top_line"></div>
				</div>
				<div class="event_app_completion">
					<p class="title_completion">
						정책지원 요청이 완료되었습니다.
					</p>
					<img src="../images/sub/event/event_completion.png" alt="">
					<a href="/index.php" class="move_main" title="메인화면으로 이동">메인화면으로 이동</a>
				</div>

			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>