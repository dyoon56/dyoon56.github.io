<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual login">
			<div class="visual_title_box">
				<h2 class="title">로그인</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user">
				<div class="login_box user_box">
					<form>
						<fieldset>
						<legend>로그인</legend>
							<div class="inner">
								<div class="id_wrap">
									<label for="input_login_id">아이디</label>
									<input type="text" id="input_login_id">
								</div>
								<div class="pw_wrap">
									<label for="input_login_pw">비밀번호</label>
									<input type="password" id="input_login_pw">
								</div>
								<div class="saveid_wrap">
									<label for="check_login_saveid">
										<input type="checkbox" id="check_login_saveid">
										<span></span>
										&nbsp;아이디저장
									</label>
									<button type="submit" title="로그인">로그인</button>
								</div>
							</div>
							<div class="btn_wrap">
								<a href="../user/find_password.php" class="btn_find_pw" title="비밀번호 찾기">비밀번호 찾기</a>
								<a href="../user/join.php" class="btn_join" title="회원가입">회원가입</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div><!-- container_inner End -->
		</div><!-- container End -->
		
		<!--footer-->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.php";?>

	</div><!--wrap_end-->
</body>
</html>