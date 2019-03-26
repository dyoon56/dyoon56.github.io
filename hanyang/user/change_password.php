<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual login">
			<div class="visual_title_box">
				<h2 class="title">비밀번호 변경</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user">
				<div class="change_password_box user_box">
					<form>
						<fieldset>
						<legend>비밀번호 변경</legend>
							<div class="inner">
								<div class="change_pw_wrap">
									<label for="input_change_pw">비밀번호</label>
									<input type="password" id="input_change_pw">
								</div>
								<div class="change_repw_wrap">
									<label for="input_change_repw">비밀번호 확인</label>
									<input type="password" id="input_change_repw">
								</div>
							</div>
							<div class="btn_wrap">
								<button type="submit" class="btn_changepw_confirm" onclick="alert('비밀번호 재설정이 완료되었습니다.')">비밀번호 재설정</button>
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