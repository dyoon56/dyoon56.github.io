<?php include $_SERVER['DOCUMENT_ROOT']."/include/head_set.php";?>
<!-- head_set_end -->
<body>
	<div id="wrap">
		<!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/include/header.php";?>

		<!-- 상단 배경 -->
		<div class="visual login">
			<div class="visual_title_box">
				<h2 class="title">회원가입</h2>
				<div class="top_line"></div>
			</div>
		</div>

		<!-- container -->
		<div id="container">
			<div class="container_inner sub user">
				<div class="title_box">
					<h2 class="title">약관동의 및 회원정보 입력</h2>
					<div class="top_line"></div>
				</div>
				<div class="join_box_step1">
					<form>
						<fieldset>
						<legend>회원가입</legend>
							<table>
								<caption>일반 회원/ERICA 회원 자격요건,가입방법,혜택</caption>
								<colgroup>
									<col width="50%">
									<col>
								</colgroup>
								<tbody>
									<tr>
										<th class="general_member">
											<label for="check_general_member">
												일반 회원<input type="checkbox" id="check_general_member">
												<span></span>
											</label>
										</th>
										<th class="erica_member">
											<label for="check_erica_member">
												ERICA 회원<input type="checkbox" id="check_erica_member">
												<span></span>
											</label>
										</th>
									</tr>
									<tr>
										<td>
											<p>자격제한 없음</p>
										</td>
										<td>
											<p>ERICA 회원</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>홈페이지를 통한 온라인가입</p>
										</td>
										<td>
											<p>한양대 ERICA 가족<br />(ERICA 대학(원)생, 교수, 교직원)</p>
										</td>
									</tr>
									<tr>
										<td>
											<ul>
												<li>Knowledge Factory 메일링 서비스</li>
												<li>각종 창업행사 및 프로그램 안내</li>
												<li>행사 및 프로그램 참가자격 부여</li>
											</ul>
										</td>
										<td>
											<ul>
												<li>행사 및 프로그램 참가자격 부여</li>
												<li>Knowledge Factory 라운지, 미팅룸 사용, 창업동아리 신청</li>
												<li>행사 및 프로그램 참가자격 부여</li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
							<p class="join_p">※ ERICA 회원은 재학증명서 또는 학생증 사본을 업로드하셔야만 회원가입이 가능합니다.</p>
							<div class="conditions_txt_wrap">		
								<div class="conditions_txt">
									<h2>&lt;이용약관&gt;</h2>
									<h3 class="ft_color">제 1 조 (목적)</h3>
									<p>이 약관은 Knowledge Factory(이하 "센터")가 제공하는 서비스의 이용과 관련하여 센터와 회원과의 권리, 의무 및 책임사항, 기타 필요한 사항을 규정함을 목적으로 합니다.</p>
									<h3 class="ft_color">제 2 조 (정의)</h3>
									<p>이 약관에서 사용하는 용어의 정의는 다음과 같습니다.</p>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"서비스"라 함은 구현되는 단말기(PC, TV, 휴대형단말기 등의 각종 유무선 장치를 포함)와 상관없이 "회원"이 이용할 수 있는 센터의 관련 제반 서비스를 의미합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"회원"이라 함은 "센터"의 "서비스"에 접속하여 이 약관에 따라 "센터"와 이용계약을 체결하고 "센터"가 제공하는 "서비스"를 이용하는 고객을 말합니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"아이디(ID)"라 함은 "회원"의 식별과 "서비스" 이용을 위하여 "회원"이 정하고 "센터"가 승인하는 문자와 숫자의 조합을 의미합니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											"비밀번호"라 함은 "회원"이 부여 받은 "아이디와 일치되는 "회원"임을 확인하고 비밀보호를 위해 "회원" 자신이 정한 문자 또는 숫자의 조합을 의미합니다.
										</li>
										<li>
											<span class="first_letter">⑤</span>
											"게시물"이라 함은 "회원"이 "서비스"를 이용함에 있어 "서비스 상"에 게시한 부호ㆍ문자ㆍ음성ㆍ음향ㆍ화상ㆍ동영상 등의 정보 형태의 글, 사진, 동영상 및 각종 파일과 링크 등을 의미합니다.
										</li>
									</ol>
									<h3 class="ft_color">제 3 조 (약관의 게시와 개정)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 이 약관의 내용을 "회원"이 쉽게 알 수 있도록 서비스 초기 화면에 게시합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "약관의 규제에 관한 법률", "정보통신망이용촉진및정보보호등에관한법률(이하 "정보통신망법")" 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 제1항의 방식에 따라 그 개정약관의 적용일자 30일 전부터 적용일자 전일까지 공지합니다. 단 "회원"의 권리, 의무에 중대한 영향을 주는 변경이 아닌 경우에는 적용일자 7일 전부터 공지하도록 합니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											전항에 따라 시행일 이후에 "회원"이 "서비스"를 이용하는 경우에는 개정약관에 동의한 것으로 간주합니다. "회원"은 변경된 약관에 동의하지 않을 경우 이용계약을 해지할 수 있습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 4 조 (약관의 해석)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 개별 서비스에 대해서는 별도의 이용약관 및 정책을 둘 수 있습니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											이 약관에서 정하지 아니한 사항이나 해석에 대해서는 관계법령 또는 상관례에 따릅니다.
										</li>
									</ol>
									<h3 class="ft_color">제 5 조 (이용계약 체결)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											이용계약은 "회원"이 되고자 하는 자(이하 "가입신청자")가 약관의 내용에 대하여 동의를 한 다음 회원가입신청을 하고 "센터"가 이러한 신청에 대하여 승낙함으로써 체결됩니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "가입신청자"의 신청에 대하여 "서비스" 이용을 승낙함을 원칙으로 합니다. 다만, "센터"는 다음 각 호에 해당하는 신청에 대하여는 승낙을 하지 않거나 사후에 이용계약을 해지할 수 있습니다.
											<ol>
												<li>
													<span class="first_letter">1.</span>
													가입신청자가 이 약관에 의하여 이전에 회원자격을 상실한 적이 있는 경우, 다만, 회원 자격 상실 후 1년이 경과한 자로서 "센터"의 회원 재가입 승낙을 얻은 경우에는 예외로 함.
												</li>
												<li>
													<span class="first_letter">1.</span>
													실명이 아니거나 타인의 명의를 이용한 경우
												</li>
												<li>
													<span class="first_letter">3.</span>
													허위의 정보를 기재하거나, "센터"가 제시하는 내용을 기재하지 않은 경우
												</li>
												<li>
													<span class="first_letter">4.</span>
													이용자의 귀책사유로 인하여 승인이 불가능하거나 기타 규정한 제반 사항을 위반하며 신청하는 경우
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">③</span>
											제1항에 따른 신청에 있어 "센터"는 "회원"의 종류에 따라 전문기관을 통한 실명확인 및 본인인증을 요청할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											"센터"는 서비스 관련 설비의 여유가 없거나, 기술상 또는 업무상 문제가 있는 경우에는 승낙을 유보할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">⑤</span>
											제2항과 제4항에 따라 회원가입신청의 승낙을 하지 아니하거나 유보한 경우, "센터"는 원칙적으로 이를 가입신청자에게 알리도록 합니다.
										</li>
										<li>
											<span class="first_letter">⑤</span>
											 이용계약의 성립 시기는 "센터"가 가입완료를 신청절차 상에서 표시한 시점으로 합니다.
										</li>
										<li>
											<span class="first_letter">⑥</span>
											"센터"는 "회원"에 대해 센터정책에 따라 등급별로 구분하여 이용시간, 이용횟수, 서비스 메뉴 등을 세분하여 이용에 차등을 둘 수 있습니다.
										</li>
										<li>
											<span class="first_letter">⑦</span>
											"센터"는 "회원"에 대하여 "영화 및 비디오물의 진흥에 관한 법률" 및 "청소년보호법"등에 따른 등급 및 연령 준수를 위해 이용제한이나 등급별 제한을 할 수 있습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 6 조 (회원정보의 변경)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"회원"은 개인정보관리화면을 통하여 언제든지 본인의 개인정보를 열람하고 수정할 수 있습니다. 다만, 서비스 관리를 위해 필요한 아이디 등은 수정이 불가능합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"회원"은 회원가입신청 시 기재한 사항이 변경되었을 경우 온라인으로 수정을 하거나 전자우편 기타 방법으로 "센터"에 대하여 그 변경사항을 알려야 합니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											제2항의 변경사항을 "센터"에 알리지 않아 발생한 불이익에 대하여 "센터"는 책임지지 않습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 7 조 (개인정보보호 의무)</h3>
									<p>센터"는 "정보통신망법" 등 관계 법령이 정하는 바에 따라 "회원"의 개인정보를 보호하기 위해 노력합니다. 개인정보의 보호 및 사용에 대해서는 관련법 및 "센터"의 개인정보취급방침이 적용됩니다. 다만, "센터"의 공식 사이트 이외의 링크된 사이트에서는 "센터"의 개인정보취급방침이 적용되지 않습니다.</p>
									<h3 class="ft_color">제 8 조 ("회원"의 "아이디" 및 "비밀번호"의 관리에 대한 의무)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"회원"의 "아이디"와 "비밀번호"에 관한 관리책임은 "회원"에게 있으며, 이를 제3자가 이용하도록 하여서는 안 됩니다
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "회원"의 "아이디"가 개인정보 유출 우려가 있거나, 반사회적 또는 미풍양속에 어긋나거나 "센터" 및 "센터"의 운영자로 오인한 우려가 있는 경우, 해당 "아이디"의 이용을 제한할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"회원"은 "아이디" 및 "비밀번호"가 도용되거나 제3자가 사용하고 있음을 인지한 경우에는 이를 즉시 "센터"에 통지하고 "센터"의 안내에 따라야 합니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											제3항의 경우에 해당 "회원"이 "센터"에 그 사실을 통지하지 않거나, 통지한 경우에도 "센터"의 안내에 따르지 않아 발생한 불이익에 대하여 "센터"는 책임지지 않습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 9 조 ("회원"에 대한 통지)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"가 "회원"에 대한 통지를 하는 경우 이 약관에 별도 규정이 없는 한 "회원"이 지정한 전자우편주소, "서비스" 내 전자메모 등으로 할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "회원" 전체에 대한 통지의 경우 7일 이상 "센터"의 게시판에 게시함으로써 제1항의 통지에 갈음할 수 있습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 10 조 ("센터"의 의무)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 관련법과 이 약관이 금지하거나 미풍양속에 반하는 행위를 하지 않으며, 계속적이고 안정적으로 "서비스"를 제공하기 위하여 최선을 다하여 노력합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "회원"이 안전하게 "서비스"를 이용할 수 있도록 개인정보(신용정보 포함)보호를 위해 보안시스템을 갖추어야 하며 개인정보취급방침을 공시하고 준수합니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"는 서비스이용과 관련하여 "회원"으로부터 제기된 의견이나 불만이 정당하다고 인정할 경우에는 이를 처리하여야 합니다. "회원"이 제기한 의견이나 불만사항에 대해서는 게시판을 활용하거나 전자우편 등을 통하여 "회원"에게 처리과정 및 결과를 전달합니다.
										</li>
									</ol>
									<h3 class="ft_color">제 11 조 ("회원"의 의무)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"회원"은 다음 행위를 하여서는 안 됩니다.
											<ol>
												<li>
													<span class="first_letter">1.</span>
													신청 또는 변경 시 허위내용의 등록
												</li>
												<li>
													<span class="first_letter">2.</span>
													타인의 정보도용
												</li>
												<li>
													<span class="first_letter">3.</span>
													"센터"가 게시한 정보의 변경
												</li>
												<li>
													<span class="first_letter">4.</span>
													"센터"가 정한 정보 이외의 정보(컴퓨터 프로그램 등) 등의 송신 또는 게시
												</li>
												<li>
													<span class="first_letter">5.</span>
													"센터"와 기타 제3자의 저작권 등 지적재산권에 대한 침해
												</li>
												<li>
													<span class="first_letter">6.</span>
													"센터" 및 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위
												</li>
												<li>
													<span class="first_letter">7.</span>
													외설 또는 폭력적인 메시지, 화상, 음성, 기타 공서양속에 반하는 정보를 "서비스"에 공개 또는 게시하는 행위
												</li>
												<li>
													<span class="first_letter">8.</span>
													센터의 동의 없이 영리를 목적으로 "서비스"를 사용하는 행위
												</li>
												<li>
													<span class="first_letter">9.</span>
													기타 불법적이거나 부당한 행위
												</li>
												<li>
													<span class="first_letter">10.</span>
													승인되지 않은 광고, 판촉물, "정크 메일(junk mail)", "스팸(spam)", "행운의 편지 (chain letters)", "피라미드 조직", 기타 다른 형태의 권유를 게시하거나 또는 전송 하는 행위.
												</li>
												<li>
													<span class="first_letter">11.</span>
													컴퓨터 소프트웨어, 하드웨어, 전기통신 장비를 방해하거나 파괴, 그 기능을 제한하기 위해 고안된 소프트웨어 바이러스, 기타 다른 컴퓨터 코드, 파일, 프로그램을 포함 하고 있는 자료를 게시하거나 또는 전송하는 행위.
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">②</span>
											"회원"은 관계법, 이 약관의 규정, 이용안내 및 "서비스"와 관련하여 공지한 주의사항, "센터"가 통지하는 사항 등을 준수하여야 하며, 기타 "센터"의 업무에 방해되는 행위를 하여서는 안 됩니다.
										<li>
									</ol>
									<h3 class="ft_color">제 12 조 ("서비스"의 제공 등)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 회원에게 "센터"가 개발하거나 다른 센터와의 제휴계약 등을 통해 제공하는 일체의 서비스를 "회원"에게 제공합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											센터는 "서비스"를 일정범위로 분할하여 각 범위 별로 이용가능시간을 별도로 지정할 수 있습니다. 다만, 이러한 경우에는 그 내용을 사전에 공지합니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"서비스"는 연중무휴, 1일 24시간 제공함을 원칙으로 합니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											"센터"는 컴퓨터 등 정보통신설비의 보수점검, 교체 및 고장, 통신두절 또는 운영상 상당한 이유가 있는 경우 "서비스"의 제공을 일시적으로 중단할 수 있습니다. 이 경우 "센터"는 제9조["회원"에 대한 통지]에 정한 방법으로 "회원"에게 통지합니다. 다만, "센터"가 사전에 통지할 수 없는 부득이한 사유가 있는 경우 사후에 통지할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">⑤</span>
											"센터"는 서비스의 제공에 필요한 경우 정기점검을 실시할 수 있으며, 정기점검시간은 서비스제공화면에 공지한 바에 따릅니다.
										</li>
									</ol>
									<h3 class="ft_color">제 13 조 ("서비스"의 변경)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 상당한 이유가 있는 경우에 운영상, 기술상의 필요에 따라 제공하고 있는 전부 또는 일부 "서비스"를 변경할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"서비스"의 내용, 이용방법, 이용시간에 대하여 변경이 있는 경우에는 변경사유, 변경될 서비스의 내용 및 제공일자 등은 그 변경 전 7일 이상 해당 서비스 초기화면에 게시하여야 합니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"는 무료로 제공되는 서비스의 일부 또는 전부를 센터의 정책 및 운영의 필요상 수정, 중단, 변경할 수 있으며, 이에 대하여 관련법에 특별한 규정이 없는 한 "회원"에게 별도의 보상을 하지 않습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 14 조 (정보의 제공 및 광고의 게재)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 "회원"이 "서비스" 이용 중 필요하다고 인정되는 다양한 정보를 공지사항이나 전자우편 등의 방법으로 "회원"에게 제공할 수 있습니다. 다만, "회원"은 관련법에 따른 거래관련 정보 및 고객문의 등에 대한 답변 등을 제외하고는 언제든지 전자우편 등에 대해서 수신 거절을 할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											제1항의 정보를 전화 및 모사전송기기에 의하여 전송하려고 하는 경우에는 "회원"의 사전 동의를 받아서 전송합니다. 다만, "회원"의 거래관련 정보 및 고객문의 등에 대한 회신에 있어서는 제외됩니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"는 "서비스"의 운영과 관련하여 서비스화면, 홈페이지, 전자우편 등에 광고를 게재할 수 있습니다. 광고가 게재된 전자우편 등을 수신한 "회원"은 수신거절을 "센터"에게 할 수 있습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 15 조 ("게시물"의 저작권)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"회원"이 "서비스" 내에 게시한 "게시물"의 저작권은 해당 게시물의 저작자에게 귀속됩니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"회원"이 "서비스" 내에 게시하는 "게시물"은 검색결과 내지 "서비스" 프로모션 등에 노출될 수 있으며, 해당 노출을 위해 필요한 범위 내에서는 일부 수정, 편집되어 게시될 수 있습니다. 이 경우, "회원"은 언제든지 고객센터 또는 "서비스" 내 관리기능을 통해 해당 게시물에 대해 삭제, 검색결과 제외, 비공개 등의 조치를 취할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"는 제2항 이외의 방법으로 "회원"의 "게시물"을 이용하고자 하는 경우에는 전화, 팩스, 전자우편 등을 통해 사전에 "회원"의 동의를 얻어야 합니다.
										</li>
									</ol>
									<h3 class="ft_color">제 16 조 ("게시물"의 관리)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"회원"의 "게시물"이 "정보통신망법" 및 "저작권법"등 관련법에 위반되는 내용을 포함하는 경우, 권리자는 관련법이 정한 절차에 따라 해당 "게시물"의 게시중단 및 삭제 등을 요청할 수 있으며, "센터"는 관련법에 따라 조치를 취하여야 합니다. 
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 전항에 따른 권리자의 요청이 없는 경우라도 권리침해가 인정될 만한 사유가 있거나 기타 센터 정책 및 관련법에 위반되는 경우에는 관련법에 따라 해당 "게시물"에 대해 임시조치 등을 취할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											본 조에 따른 세부절차는 "정보통신망법" 및 "저작권법"이 규정한 범위 내에서 "센터"가 정한 "게시중단요청서비스"에 따릅니다.
										</li>
									</ol>
									<h3 class="ft_color">제 17 조 (권리의 귀속)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"서비스"에 대한 저작권 및 지적재산권은 "센터"에 귀속됩니다. 단, "회원"의 "게시물" 및 제휴계약에 따라 제공된 저작물 등은 제외합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 서비스와 관련하여 "회원"에게 "센터"가 정한 이용조건에 따라 계정, "아이디", 콘텐츠, "포인트" 등을 이용할 수 있는 이용권만을 부여하며, "회원"은 이를 양도, 판매, 담보제공 등의 처분행위를 할 수 없습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 18 조 (계약해제, 해지 등)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"회원"은 언제든지 서비스초기화면의 고객센터 또는 내 정보 관리 메뉴 등을 통하여 이용계약 해지 신청을 할 수 있으며, "센터"는 관련법 등이 정하는 바에 따라 이를 즉시 처리하여야 합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"회원"이 계약을 해지할 경우, 관련법 및 개인정보취급방침에 따라 "센터"가 회원정보를 보유하는 경우를 제외하고는 해지 즉시 "회원"의 모든 데이터는 소멸됩니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"회원"이 계약을 해지하는 경우, "회원"이 작성한 "게시물" 중 본인 계정에 등록된 게시물 일체는 삭제됩니다. 다만, 타인에 의해 담기, 스크랩 등이 되어 재 게시되거나, 공용게시판에 등록된 "게시물" 등은 삭제되지 않으니 사전에 삭제 후 탈퇴하시기 바랍니다.
										</li>
									</ol>
									<h3 class="ft_color">제 19 조 (이용제한 등)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 "회원"이 약관의 의무를 위반하거나 "서비스"의 정상적인 운영을 방해한 경우, 경고, 일시정지, 영구이용정지 등으로 "서비스" 이용을 단계적으로 제한할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 전항에도 불구하고, "주민등록법"을 위반한 명의도용 및 결제도용, "저작권법" 및 "컴퓨터프로그램보호법"을 위반한 불법프로그램의 제공 및 운영방해, "정보통신망법"을 위반한 불법통신 및 해킹, 악성프로그램의 배포, 접속권한 초과행위 등과 같이 관련법을 위반한 경우에는 즉시 영구이용정지를 할 수 있습니다. 본 항에 따른 영구이용정지 시 "서비스" 이용을 통해 획득한 "포인트" 및 기타 혜택 등도 모두 소멸되며, "센터"는 이에 대해 별도로 보상하지 않습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"는 "회원"이 계속해서 3개월 이상 로그인하지 않는 경우, 회원정보의 보호 및 운영의 효율성을 위해 이용을 제한할 수 있습니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											"센터"는 본 조의 이용제한 범위 내에서 제한의 조건 및 세부내용은 이용제한정책 및 개별 서비스상의 운영정책에서 정하는 바에 의합니다.
										</li>
										<li>
											<span class="first_letter">⑤</span>
											본 조에 따라 "서비스" 이용을 제한하거나 계약을 해지하는 경우에는 "센터"는 제9조["회원"에 대한 통지]에 따라 통지합니다.
										</li>
										<li>
											<span class="first_letter">⑥</span>
											"회원"은 본 조에 따른 이용제한 등에 대해 "센터"가 정한 절차에 따라 이의신청을 할 수 있습니다. 이 때 이의가 정당하다고 "센터"가 인정하는 경우 "센터"는 즉시 "서비스"의 이용을 재개합니다.
										</li>
									</ol>
									<h3 class="ft_color">제 20 조 (책임제한)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"는 천재지변 또는 이에 준하는 불가항력으로 인하여 "서비스"를 제공할 수 없는 경우에는 "서비스" 제공에 관한 책임이 면제됩니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "회원"의 귀책사유로 인한 "서비스" 이용의 장애에 대하여는 책임을 지지 않습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"는 "회원"이 "서비스"와 관련하여 게재한 정보, 자료, 사실의 신뢰도, 정확성 등의 내용에 관하여는 책임을 지지 않습니다.
										</li>
										<li>
											<span class="first_letter">④</span>
											"센터"는 "회원" 간 또는 "회원"과 제3자 상호간에 "서비스"를 매개로 하여 거래 등을 한 경우에는 책임이 면제됩니다.
										</li>
										<li>
											<span class="first_letter">⑤</span>
											"센터"는 무료로 제공되는 서비스 이용과 관련하여 관련법에 특별한 규정이 없는 한 책임을 지지 않습니다.
										</li>
									</ol>
									<h3 class="ft_color">제 21 조 (준거법 및 재판관할)</h3>
									<ol>
										<li>
											<span class="first_letter">①</span>
											"센터"와 "회원" 간 제기된 소송은 대한민국 법을 준거법으로 합니다.
										</li>
										<li>
											<span class="first_letter">②</span>
											"센터"는 "회원"의 귀책사유로 인한 "서비스" 이용의 장애에 대하여는 책임을 지지 않습니다.
										</li>
										<li>
											<span class="first_letter">③</span>
											"센터"와 "회원"간 발생한 분쟁에 관한 소송은 민사소송법 상의 관할법원에 제소합니다.
										</li>
									</ol>
									<p style="margin:20px 0;" class="ft_color">부칙</p>
									<p>이 약관은 2014년 3월 24일부터 적용됩니다.</p>
									<h2 style="margin-top:20px;">&lt;개인정보이용&gt;</h2>
									<p>Knowledge Factory(이하 ‘센터’라 한다)는 개인정보 보호법 제30조에 따라 정보주체의 개인 정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하 여 다음과 같이 개인정보 처리지침을 수립.공개합니다.</p>
									<h3>제1조(개인정보의 처리목적)</h3>
									<p>이 약관은 Knowledge Factory(이하 "센터")가 제공하는 서비스의 이용과 관련하여 센터와 회원과의 권리, 의무 및 책임사항, 기타 필요한 사항을 규정함을 목적으로 합니다.</p>
									<br />
									<ol>
										<li>
											<span class="first_letter ft_color">1.</span>
											<span class="ft_color">홈페이지 회원 가입 및 관리</span>
											<p>회원 가입의사 확인, 회원제 서비스 제공에 따른 회원자격 유지.관리, 서비스 부정이용 방지, 각종 고지.통지, 고충처리 등을 목적으로 개인정보를 처리합니다.</p>
										</li>
										<li>
											<span class="first_letter ft_color">2.</span>
											<span class="ft_color">고충처리</span>
											<p>민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락.통지, 처리결과 통보 등의 목적으로 개인정보를 처리합니다.</p>
										</li>
									</ol>
									<h3>제2조(개인정보의 처리 및 보유기간)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											센터는 법령에 따른 개인정보 보유.이용 기간 또는 정보주체로부터 개인정보를 수집시에 동의받은 개인정보 보유.이용기 간 내에서 개인정보를 처리.보유합니다.
										</li>
										<li>
											<span class="first_letter">2.</span>
											각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.
											<ol>
												<li>
													<span class="first_letter">1.</span>
													홈페이지 회원 가입 및 관리 : 사업자/단체 홈페이지 탈퇴시까지 다만, 다음의 사유에 해당하는 경우에는 해당 사유 종료시까지
												</li>
												<li>
													<span class="first_letter">2.</span>
													관계 법령 위반에 따른 수사.조사 등이 진행중인 경우에는 해당 수사.조사종료시까지
												</li>
												<li>
													<span class="first_letter">3.</span>
													「정보통신망 이용촉진 및 정보보호 등에 관한 법률」시행령 제29조에 따른 본인확인정보 보관 : 게시판에 정보 게시가 종료된 후 6개월
												</li>
											</ol>
										</li>
									</ol>
									<h3>제3조(개인정보의 제3자 제공)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											센터는 정보주체의 개인정보를 제1조(개인정보의 처리 목적)에서 명시한 범위 내에서만 처리하며, 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조에 해당하는 경우에만 개인정보를 제3자에게 제 공합니다.
										</li>
										<li>
											<span class="first_letter">2.</span>
											창업센터은(는) 다음과 같이 개인정보를 제3자에게 제공하고 있습니다.
											<ol>
												<li>
													&lt;한양대학교 ERICA 캠퍼스 창업교육센터&gt;
												</li>
												<li>
													<span class="first_letter">-</span>
													개인정보를 제공받는 자 : &lt;한양대학교 ERICA 캠퍼스 각 부처&gt;
												</li>
												<li>
													<span class="first_letter">-</span>
													제공받는 자의 개인정보 이용목적 : &lt;교내 창업관련 서비스 이용현황 조사&gt;
												</li>
												<li>
													<span class="first_letter">-</span>
													제공하는 개인정보 항목 : &lt;이름, 학과, 이메일, 전화번호&gt;
												</li>
												<li>
													<span class="first_letter">-</span>
													제공받는 자의 보유․이용기간 : &lt;3년&gt;
												</li>
											</ol>
										</li>
									</ol>
									<h3>제4조(개인정보처리의 위탁)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											창업센터는 원활한 개인정보 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다. 
											<ol>
												<li>
													&lt;홈페이지 회원등급 관리&gt;
												</li>
												<li>
													<span class="first_letter">-</span>
													위탁받는 자 (수탁자) : Knoweledge Factory 근로장학생 
												</li>
												<li>
													<span class="first_letter">-</span>
													위탁하는 업무의 내용 : 홈페이지 회원등급관리  등
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">2.</span>
											센터는 위탁계약 체결시 개인정보 보호법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적.관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리. 감독, 손해배상 등 책임에 관한 사항을 계약서 등 문서에 명시하고, 수탁자가 개 인정보를 안전하게 처리하는지를 감독하고 있습니다.
										</li>
										<li>
											<span class="first_letter">3.</span>
											위탁업무의 내용이나 수탁자가 변경될 경우에는 지체없이 본 개인정보 처리방 침을 통하여 공개하도록 하겠습니다. 
										</li>
									</ol>
									<h3>제5조(정보주체의 권리.의무 및 행사방법)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											정보주체는 센터에 대해 언제든지 다음 각 호의 개인정보 보호 관련 권리를 행사할 수 있습니다.
											<ol>
												<li>
													<span class="first_letter">1.</span>
													개인정보 열람요구
												</li>
												<li>
													<span class="first_letter">2.</span>
													오류 등이 있을 경우 정정 요구
												</li>
												<li>
													<span class="first_letter">3.</span>
													삭제요구
												</li>
												<li>
													<span class="first_letter">4.</span>
													처리정지 요구
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">2.</span>
											제1항에 따른 권리 행사는 센터에 대해 서면, 전화, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 센터는 이에 대해 지체없이 조치하겠습니다.
										</li>
										<li>
											<span class="first_letter">3.</span>
											정보주체가 개인정보의 오류 등에 대한 정정 또는 삭제를 요구한 경우에는 회 사는 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.
										</li>
										<li>
											<span class="first_letter">4.</span>
											제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대 리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.
										</li>
										<li>
											<span class="first_letter">5.</span>
											정보주체는 개인정보 보호법 등 관계법령을 위반하여 센터가 처리하고 있는 정보주체 본인이나 타인의 개인정보 및 사생활을 침해하여서는 아니됩니다.
										</li>
									</ol>
									<h3>제6조(처리하는 개인정보 항목)</h3>
									<p>센터는 다음의 개인정보 항목을 처리하고 있습니다.</p><br />
									<ol>
										<li>
											<span class="first_letter">1.</span>
											홈페이지 회원 가입 및 관리
											<ol>
												<li>
													<span class="first_letter">-</span>
													필수항목 : 성명, 아이디, 비밀번호, 이메일주소
												</li>
												<li>
													<span class="first_letter ft_color1">-</span>
													<span class="ft_color1">선택항목 : 전화번호</span>
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">2.</span>
											인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.
											<ol>
												<li>
													<span class="first_letter">-</span>
													IP주소, 쿠키, 서비스 이용기록, 방문기록, 불량 이용기록 등
												</li>
											</ol>
										</li>
									</ol>
									<h3>제7조(개인정보의 파기)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											센터는 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체없이 해당 개인정보를 파기합니다.
										</li>
										<li>
											<span class="first_letter">2.</span>
											정보주체로부터 동의받은 개인정보 보유기간이 경과하거나 처리목적이 달성되 었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DB)로 옮기거나 보관장소를 달리하여 보존 합니다.
										</li>
										<li>
											<span class="first_letter">3.</span>
											개인정보 파기의 절차 및 방법은 다음과 같습니다.
											<ol>
												<li>
													<span class="first_letter">1.</span>
													파기절차: 센터는 파기 사유가 발생한 개인정보를 선정하고, 센터의 개인정보 보호책임자 의 승인을 받아 개인정보를 파기합니다.
												</li>
												<li>
													<span class="first_letter">2.</span>
													파기방법: 센터는 전자적 파일 형태로 기록.저장된 개인정보는 기록을 재생할 수 없도록로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기하며, 종이 문서에 기록.저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.
												</li>
											</ol>
										</li>
									</ol>
									<h3>제8조(개인정보의 안전성 확보조치)</h3>
									<p>센터는 개인정보의 안전성 확보를 위해 다음 과 같은 조치를 취하고 있습니다.</p><br />
									<ol>
										<li>
											<span class="first_letter">1.</span>
											관리적 조치: 내부관리계획 수립.시행, 정기적 직원 교육 등
										</li>
										<li>
											<span class="first_letter">2.</span>
											기술적 조치: 개인정보처리시스템 등의 접근권한 관리, 접근통제시스템 설치, 고유식별정보 등의 암호화, 보안프로그램 설치
										</li>
										<li>
											<span class="first_letter">3.</span>
											물리적 조치: 전산실, 자료보관실 등의 접근통제
										</li>
									</ol>
									<h3>제9조(개인정보 보호책임자)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											<ol>
												<li>
													<span class="first_letter">•</span>
													개인정보 보호책임자<br />성명: 현지희<br />직책: 팀장<br />연락처: 031-400-4942 (email: <a href="#">jhhyun@hanyang.ac.kr</a>, Fax: 031-400-4978)
												</li>
												<li>
													<span class="first_letter">•</span>
													개인정보 보호 담당부서<br />부서명 : LINC사업단 창업교육센터 행정팀<br />담당자: 이강표<br />  연락처: 031-400-4981 (email: <a href="#">kplee@hanyang.ac.kr</a>, Fax: 031-400-4978)
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">2.</span>
											정보주체께서는 센터의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 센터는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.
										</li>
									</ol>
									<h3>제10조(개인정보 열람청구)</h3>
									<p>정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 센터는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.</p><br />
									<ol>
										<li>
											<span class="first_letter">•</span>
											개인정보 열람청구 접수•처리 부서<br />부서명 : LINC사업단 창업교육센터 행정팀<br />담당자 : 이강표<br />연락처 : 031-400-4981 (email: <a href="#">kplee@hanyang.ac.kr</a>, Fax: 031-400-4978)
										</li>
									</ol>
									<h3>제11조(권익침해 구제방법)</h3>
									<p>정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다.</p>
									<p>&lt;아래의 기관은 센터와는 별개의 기관으로서, 센터의 자체적인 개인정보 불만처리, 피해 구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다&gt;</p>
									<ol>
										<li>
											<span class="first_letter">•</span>
											개인정보 침해신고센터 (한국인터넷진흥원 운영)
											<ol>
												<li>
													<span class="first_letter">-</span>
													소관업무: 개인정보 침해사실 신고, 상담 신청
												</li>
												<li>
													<span class="first_letter">-</span>
													홈페이지: <a href="http://privacy.kisa.or.kr/kor/main.jsp" target="_blank">privacy.kisa.or.kr</a>
												</li>
												<li>
													<span class="first_letter">-</span>
													전화: (국번없이) 118
												</li>
												<li>
													<span class="first_letter">-</span>
													주소: (138-950) 서울시 송파구 중대로 135 한국인터넷진흥원 개인정보침해신고센터
												</li>
											</ol>
										</li>
										<li>
											<span class="first_letter">•</span>
											개인정보 분쟁조정위원회 (한국인터넷진흥원 운영)
											<ol>
												<li>
													<span class="first_letter">-</span>
													소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)
												</li>
												<li>
													<span class="first_letter">-</span>
													홈페이지: <a href="privacy.kisa.or.kr" target="_blank">privacy.kisa.or.kr</a>
												</li>
												<li>
													<span class="first_letter">-</span>
													전화: (국번없이) 118
												</li>
												<li>
													<span class="first_letter">-</span>
													주소: (138-950) 서울시 송파구 중대로 135 한국인터넷진흥원 개인정보침해신고센터
													<ol>
														<li>
															<span class="first_letter">•</span>
															대검찰청 사이버범죄수사단 : 02-3480-3573 (<a href="http://www.spo.go.kr" target="_blank">www.spo.go.kr</a>)
														</li>
														<li>
															<span class="first_letter">•</span>
															경찰청 사이버테러대응센터 : 1566-0112 (<a href="http://www.netan.go.kr" target="_blank">www.netan.go.kr</a>)
														</li>
													</ol>
												</li>
											</ol>
										</li>
									</ol>
									<h3>제12조(개인정보 처리방침 변경)</h3>
									<ol>
										<li>
											<span class="first_letter">1.</span>
											이 개인정보 처리방침은 2015. 6. 2부터 적용됩니다.
										</li>
										<li>
											<span class="first_letter">1.</span>
											이전의 개인정보 처리방침은 확인요청 시 지체없이 확인하실 수 있습니다.
											<ol>
												<li>
													<span class="first_letter">-</span>
													2014. 3. 24. ~ 2015.6.2. 적용
												</li>	
											</ol>
										</li>
									</ol>
								</div>
								<div class="check_conditions1_wrap">
									<label for="check_conditions1">
										<input type="checkbox" id="check_conditions1">
										&nbsp;이용약관 및 개인정보취급방침에 동의합니다.
										<span></span>
									</label>
								</div>
								<div class="check_conditions2_wrap">
									<label for="check_conditions2">
										<input type="checkbox" id="check_conditions2"><span></span>
										&nbsp;Knowledge Space 통합회원 가입에 동의합니다. <i>(선택)</i>
									</label>
								</div>
							</div>
							<div class="btn_wrap">
								<button type="reset" class="btn_join_cancel" title="취소">취소</button>
								<button type="submit" class="btn_join_confirm" title="확인">확인</button>
							</div>
						</fieldset>
					</form>
				</div> <!-- 약관동의 및 회원정보 입력 step1 End -->
				
				<div class="join_box_step2 join_box_step2_erica">
					<div class="title_box">
						<h2 class="title">약관동의 및 회원정보 입력 (ERICA 회원)</h2>
						<div class="top_line"></div>
					</div>
					<form>
						<fieldset>
							<div class="inner">
								<table>
									<caption>약관동의 및 회원정보 입력 (ERICA 회원)</caption>
									<colgroup>
										<col width="135">
										<col width="400">
										<col width="135">
										<col>
									</colgroup>
									<tbody>
										<tr>
											<th>
												<label for="input_join_id_erica">아이디</label>
											</th>
											<td>
												<input type="text" id="input_join_id_erica">
											</td>
											<th>
												<label for="input_join_name_erica">이름</label>
											</th>
											<td>
												<input type="text" id="input_join_name_erica">
											</td>
										</tr>
										<tr>
											<th>
												<label for="input_join_pw_erica">비밀번호</label>
											</th>
											<td>
												<input type="password" id="input_join_pw_erica">
											</td>
											<th>
												<label for="input_join_repw_erica">비밀번호 확인</label>
											</th>
											<td>
												<input type="password" id="input_join_repw_erica">
											</td>
										</tr>
										<tr>
											<th>
												<label for="input_join_email1_erica">이메일</label>
											</th>
											<td>
												<input type="text" id="input_join_email1_erica">
												@
												<input type="text" id="input_join_email2_erica">
												<div class="select_mail">
													<label for="select_join_email_erica">직접입력</label>
													<select id="select_join_email_erica">
														<option value="">직접입력</option>
														<option value="naver.com">naver.com</option>
														<option value="nate.com">nate.com</option>
														<option value="hotmail.com">hotmail.com</option>
													</select>
												</div>
											</td>
											<th>
												<label for="input_join_phone1_erica">전화번호</label>
											</th>
											<td>
												<div class="select_phone select_cus">
													<label for="select_phone_erica">선택</label>
													<select id="select_phone_erica">
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
												<input type="text" id="input_join_phone1_erica">
												-
												<input type="text" id="input_join_phone2_erica">
											</td>
										</tr>
										<tr>
											<th>
												<label for="input_join_file_erica">첨부파일</label>
											</th>
											<td>
												<div class="filebox">
													<input class="upload-name" id="input_join_file_erica" value="" readonly />
													<label for="join_erica_filename">파일선택</label>
													<input type="file" id="join_erica_filename" class="upload-hidden">
												</div>
											</td>
											<th class="none_bg">
												<label for="input_join_school_erica">학과(추가정보)</label>
											</th>
											<td>
												<input type="text" id="input_join_school_erica">
											</td>
										</tr>
									</tbody>
								</table>
								<div class="bottom">
									<div class="join_newsletter_wrap">
										<label for="check_join_newsletter_erica">
											<input type="checkbox" id="check_join_newsletter_erica">
											<span></span>
											&nbsp;뉴스레터 받기
										</label>
									</div>
									<p>※ 재학증명서 또는 학생증 사본을 업로드하셔야만 회원가입이 가능합니다.</p>
								</div>
								<div class="btn_wrap">
									<button type="reset" class="btn_join_cancel" title="취소">취소</button>
									<button type="submit" class="btn_join_join" title="회원가입">회원가입</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div><!-- ERICA회원 약관동의 및 회원정보 입력 -->

				<div class="join_box_step2 join_box_step2_general">
					<div class="title_box">
						<h2 class="title">약관동의 및 회원정보 입력 (일반회원)</h2>
						<div class="top_line"></div>
					</div>
					<form>
						<fieldset>
							<div class="inner">
								<table>
									<caption>약관동의 및 회원정보 입력 (일반회원)</caption>
									<colgroup>
										<col width="135">
										<col width="400">
										<col width="135">
										<col>
									</colgroup>
									<tbody>
										<tr>
											<th>
												<label for="input_join_id_general">아이디</label>
											</th>
											<td>
												<input type="text" id="input_join_id_general">
											</td>
											<th>
												<label for="input_join_name_general">이름</label>
											</th>
											<td>
												<input type="text" id="input_join_name_general">
											</td>
										</tr>
										<tr>
											<th>
												<label for="input_join_pw_general">비밀번호</label>
											</th>
											<td>
												<input type="password" id="input_join_pw_general">
											</td>
											<th>
												<label for="input_join_repw_general">비밀번호 확인</label>
											</th>
											<td>
												<input type="password" id="input_join_repw_general">
											</td>
										</tr>
										<tr>
											<th>
												<label for="input_join_email1_general">이메일</label>
											</th>
											<td>
												<input type="text" id="input_join_email1_general">
												@
												<input type="text" id="input_join_email2_general">
												<div class="select_mail">
													<label for="select_join_email_general">직접입력</label>
													<select id="select_join_email_general">
														<option value="">직접입력</option>
														<option value="naver.com">naver.com</option>
														<option value="nate.com">nate.com</option>
														<option value="hotmail.com">hotmail.com</option>
													</select>
												</div>
											</td>
											<th>
												<label for="input_join_phone1_general">전화번호</label>
											</th>
											<td>
												<div class="select_phone select_cus">
													<label for="select_phone_general">선택</label>
													<select id="select_phone_general">
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
												<input type="text" id="input_join_phone1_general">
												-
												<input type="text" id="input_join_phone2_general">
											</td>
										</tr>
										<tr>
											<th class="none_bg">
												<label for="input_join_school_general">소속(추가정보)</label>
											</th>
											<td colspan="3">
												<input type="text" id="input_join_school_general">
											</td>
										</tr>
									</tbody>
								</table>
								<div class="bottom">
									<div class="join_newsletter_wrap">
										<label for="check_join_newsletter">
											<input type="checkbox" id="check_join_newsletter">
											<span></span>
											&nbsp;뉴스레터 받기
										</label>
									</div>
								</div>
								<div class="btn_wrap">
									<button type="reset" class="btn_join_cancel" title="취소">취소</button>
									<button type="submit" class="btn_join_join" title="회원가입">회원가입</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div> <!-- 일반회원 약관동의 및 회원정보 입력-->

				<!-- 회원가입 완료 -->
				<div class="join_completion completion">
					<div class="inner">
						<p class="title_completion">
							회원가입이 완료되었습니다.
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