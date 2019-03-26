<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual login">
			<div class="visual_title_box">
				<h2 class="title">비밀번호 찾기</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user">
				<div class="find_password_box user_box">
					<form>
						<fieldset>
						<legend>비밀번호 찾기</legend>
							<div class="inner">
								<label for="input_findpw_email" class="blind">이메일</label>
								<input type="text" id="input_findpw_email" placeholder="이메일">
								<p>가입 당시 기입하셨던 이메일 주소를 입력하세요.</p>
							</div>
							<div class="btn_wrap">
								<button type="reset" class="btn_findpw_cancel" title="취소">취소</button>
								<button type="submit" class="btn_findpw_confirm" onclick="alert('메일이 전송되었습니다.')" title="확인">확인</button>
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