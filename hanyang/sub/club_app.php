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
					<h2 class="title">창업동아리 신청</h2>
					<div class="top_line"></div>
				</div>

				<div class="club_app_wrap">
					<form>
						<fieldset>
							<legend>창업동아리 신청</legend>
							<!-- 동아리 기본정보 -->
							<h2>동아리 기본정보</h2>
							<table>
								<caption>동아리 기본정보</caption>
								<colgroup>
									<col width="150">
									<col>
									<col width="150">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th>
											<label for="input_app_clubname">동아리명 (한글)</label>
										</th>
										<td>
											<input type="text" id="input_app_clubname">
										</td>
										<th>
											<label for="input_app_clubname_eng">동아리명 (영문)</label>
										</th>
										<td>
											<input type="text" id="input_app_clubname_eng">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_app_exp">한줄소개 (15자 이내)</label>
										</th>
										<td>
											<input type="text" id="input_app_exp">
										</td>
										<th>
											<label for="input_app_date">설립일 (YYYY-MM-DD)</label>
										</th>
										<td>
											<input type="text" id="input_app_date">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_app_representativename">대표자명</label>
										</th>
										<td>
											<input type="text" id="input_app_representativename">
										</td>
										<th>
											<label for="input_app_member">멤버수 (숫자만 입력)</label>
										</th>
										<td>
											<input type="text" id="input_app_member">
										</td>
									</tr>
									<tr>
										<th>
											사업분야
										</th>
										<td colspan="3">
											<div class="select_business select_cus">
												<label for="select_business">선택하기</label>
												<select id="select_business">
													<option value="">선택하기</option>
													<option value="">IT및 인터넷 기술</option>
													<option value="">웹&amp;인터넷 기술</option>
													<option value="">문화콘텐츠</option>
													<option value="">디자인 제품</option>
													<option value="">IOT&amp;제조분야</option>
													<option value="">기타</option>
												</select>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<!-- 연락처정보 -->
							<h2>연락처 정보</h2>
							<table>
								<caption>연락처 정보</caption>
								<colgroup>
									<col width="150">
									<col>
									<col width="150">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th>
											<label for="input_app_site">공식 웹사이트</label>
										</th>
										<td>
											<input type="text" id="input_app_site">
										</td>
										<th>
											<label for="input_app_representative_mail">대표 이메일</label>
										</th>
										<td>
											<input type="text" id="input_app_representative_mail">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_app_address">주소</label>
										</th>
										<td colspan="3">
											<input type="text" id="input_app_address">
										</td>
									</tr>
									<tr>
										<th>
											<label for="input_app_phone">대표자명</label>
										</th>
										<td>
											<input type="text" id="input_app_phone">
										</td>
										<th>
											<label for="input_app_corporate">사업자등록번호<br />(없으면 공란)</label>
										</th>
										<td>
											<input type="text" id="input_app_corporate">
										</td>
									</tr>
									<tr>
										<th>
											<label for="textarea_app_company">회사소개</label>
										</th>
										<td colspan="3">
											<textarea id="textarea_app_company"></textarea>
										</td>
									</tr>
									<tr class="app_file_td">
										<th>
											<label for="input_app_file">로고</label>
										</th>
										<td colspan="3">
											<p>※ 584 x 348px 의 JPG 혹은 GIF 파일을 권장합니다.</p>
											<div class="filebox">
												<input class="upload-name" id="input_app_file" value="" readonly />
												<label for="input_app_filename">파일선택</label>
												<input type="file" id="input_app_filename" class="upload-hidden">
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<!-- 창업아이템 -->
							<div class="club_item_wrap">
								<div class="club_item_list">
									<h2>창업아이템1<span>보유한 창업아이템을 잘 설명할 수 있도록 글, 그림, 동영상 등을 이용하여 자유롭게 작성</span></h2>
									<table>
										<caption>창업아이템1</caption>
										<colgroup>
											<col width="155">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>아이템명 (30자 이내)
												<td>
													<input type="text">
												</td>
											</tr>
											<tr>
												<th>아이템 상세설명</th>
												<td>
													<textarea></textarea>
												</td>
											</tr>
											<tr>
												<th>참고링크 (선택)</th>
												<td>
													<input type="text">
												</td>
											</tr>
											<tr>
												<th>사업분야</th>
												<td>
													<div class="select_business select_cus">
														<label for="select_club_item">선택하기</label>
														<select id="select_club_item">
															<option value="">선택하기</option>
															<option value="">IT및 인터넷 기술</option>
															<option value="">웹&amp;인터넷 기술</option>
															<option value="">문화콘텐츠</option>
															<option value="">디자인 제품</option>
															<option value="">IOT&amp;제조분야</option>
															<option value="">기타</option>
														</select>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- 창업아이템1 End -->
								<div class="club_item_list">
									<h2>창업아이템2<span>보유한 창업아이템을 잘 설명할 수 있도록 글, 그림, 동영상 등을 이용하여 자유롭게 작성</span></h2>
									<table>
										<caption>창업아이템1</caption>
										<colgroup>
											<col width="155">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th>아이템명 (30자 이내)</th>
												<td>
													<input type="text">
												</td>
											</tr>
											<tr>
												<th>아이템 상세설명</th>
												<td>
													<textarea></textarea>
												</td>
											</tr>
											<tr>
												<th>참고링크 (선택)</th>
												<td>
													<input type="text">
												</td>
											</tr>
											<tr>
												<th>사업분야</th>
												<td>
													<div class="select_business select_cus">
														<label for="select_club_item">선택하기</label>
														<select id="select_club_item">
															<option value="">선택하기</option>
															<option value="">IT및 인터넷 기술</option>
															<option value="">웹&amp;인터넷 기술</option>
															<option value="">문화콘텐츠</option>
															<option value="">디자인 제품</option>
															<option value="">IOT&amp;제조분야</option>
															<option value="">기타</option>
														</select>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="field_add">
										<span>창업아이템2 삭제</span>
										<button type="button" class="btn_app_remove"></button>
									</div>
								</div><!-- 창업아이템2 End -->
								<button class="btn_app_add">추가하기</button>
							</div>
							<!-- 신청동기 -->
							<h2>신청동기<span>창업동아리 신청 동기, 배경 등을 자유롭게 작성</span></h2>
							<textarea id="textarea_app_motive"></textarea>
							<!-- 운영목표 및 계획 -->
							<h2>운영목표 및 계획<span>창업동아리 운영 목표, 계획 등을 자유롭게 작성</span></h2>
							<textarea id="textarea_app_plan"></textarea>
							<!-- 교내외 창업관련 활동 경험 -->
							<h2>교내외 창업관련 활동 경험<span>교내외 창업 관련 대회 수상내역, 활동 등을 작성(수상내역의 경우 연도, 기관 명시)</span></h2>
							<textarea id="textarea_app_career"></textarea>
							<!-- 추가 첨부자료 -->
							<h2>추가 첨부자료</h2>
							<p class="filebox_exp">재(휴)학 증명서 (팀원 모두, 반드시 압축파일로 제출)</p>
							<div class="filebox">
								<input class="upload-name" id="input_app_file1" value="" readonly />
								<label for="input_app_filename1">파일선택</label>
								<input type="file" id="input_app_filename1" class="upload-hidden">
							</div>
							<p class="filebox_exp filebox_exp2">사업계획서</p>
							<div class="filebox">
								<input class="upload-name" id="input_app_file2" value="" readonly />
								<label for="input_app_filename2">파일선택</label>
								<input type="file" id="input_app_filename2" class="upload-hidden">
								<a href="/doc/business_plan.pptx" class="btn_app_down" title="사업계획서 양식 다운로드">
									사업계획서 양식 다운로드 <span class="down_icon"></span>
								</a>
							</div>
							<div class="btn_wrap">
								<button type="submit" class="btn_app_temporary" onclick="confirm('임시저장하시겠습니까?')" title="임시저장">임시저장</button>
								<button type="submit" class="btn_app_submit" onclick="confirm('제출하시겠습니까?')" title="제출하기">제출하기</button>
								<button type="submit" class="btn_app_submit" onclick="confirm('수정하시겠습니까?')" title="수정하기">수정하기</button>
							</div>
						</fieldset>
					</form>
				</div><!-- 창업동아리 상세 End -->

				<!-- 창업동아리 신청 완료 -->
				<div class="title_box">
					<h2 class="title">창업동아리 신청</h2>
					<div class="top_line"></div>
				</div>
				<div class="proposals_completion completion">
					<div class="inner">
						<p class="title_completion">
							창업동아리 신청이 완료되었습니다.
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