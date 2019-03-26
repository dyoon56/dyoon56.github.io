var path = window.location.pathname;
path = path.replace(/\/$/, "");
path = decodeURIComponent(path);

$(function(){

	// 브라우저 및 버전을 구하기 위한 변수들.
    'use strict';
    var agent = navigator.userAgent.toLowerCase(),
        name = navigator.appName,
        browser;
    
    // MS 계열 브라우저를 구분하기 위함.
    if(name === 'Microsoft Internet Explorer' || agent.indexOf('trident') > -1 || agent.indexOf('edge/') > -1) {
        browser = 'ie';
        if(name === 'Microsoft Internet Explorer') { // IE old version (IE 10 or Lower)
            agent = /msie ([0-9]{1,}[\.0-9]{0,})/.exec(agent);
            browser += parseInt(agent[1]);
        } else { // IE 11+
            if(agent.indexOf('trident') > -1) { // IE 11 
                browser += 11;
            } else if(agent.indexOf('edge/') > -1) { // Edge
                browser = 'edge';
            }
        }
    } else if(agent.indexOf('safari') > -1) { // Chrome or Safari
        if(agent.indexOf('opr') > -1) { // Opera
            browser = 'opera';
        } else if(agent.indexOf('chrome') > -1) { // Chrome
            browser = 'chrome';
        } else { // Safari
            browser = 'safari';
        }
    } else if(agent.indexOf('firefox') > -1) { // Firefox
        browser = 'firefox';
    }

    // IE: ie7~ie11, Edge: edge, Chrome: chrome, Firefox: firefox, Safari: safari, Opera: opera
    document.getElementsByTagName('html')[0].className = browser;

	// 말줄임
	$(".ellipsis").dotdotdot();

	// 스크롤시 header 상단 고정
	$(window).on('scroll',function(){
		var sct = $(window).scrollTop();
		var main_popup = $('.main_popup').height();
		var main_popup_len = $('.main_popup:visible').length;
		if(sct > 30+(main_popup*main_popup_len)){
			$('#header').css({
				position:'fixed',
				top:0,
				border:'1px solid #dbdbdb'
			});
			$(".ellipsis").dotdotdot();
		}else{
			$('#header').css({
				position:'absolute',
				top:30+(main_popup*main_popup_len),
				border:'1px solid #fff',
				borderBottom:'none'
			});
		}

		// 메인 스크롤시 오른쪽 버튼 on,off
		if(path.indexOf('index') > -1 || window.location.pathname=='/'){
			var section1 = $('.main_visual').offset().top;
			var section2 = $('.main_media').offset().top;
			var section3 = $('.main_club').offset().top-1;

			for(var i=1;i<=3;i++){
				if(sct >= eval('section'+i)){
					$('.section_btn button').removeClass('on');
					$('.section_btn li:eq('+(i-1)+') button').addClass('on');		
				}
			}
		}
	});
	
	// setNavigation();

	// 현재페이지일 때 메뉴 on
	function setNavigation() {

		var depth1Array = ['event','edu','mentoring','facility','club','partnership'];

		 for(var i=0; i<depth1Array.length; i++){
			if(path.indexOf(depth1Array[i]) > -1){
				$('.gnb > li').removeClass('on');
				$('.gnb > li').eq(i).addClass('on');
			}
		}
	 };

});

$(document).ready(function(){

	///////// 메인 팝업 하루 열지 않기 쿠키 설정/////////
	function notice_getCookie( name ){
	var nameOfCookie = name + "=";
	var x = 0;
	while ( x <= document.cookie.length )
	{
	var y = (x+nameOfCookie.length);
	if ( document.cookie.substring( x, y ) == nameOfCookie ) {
	if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
	endOfCookie = document.cookie.length;
	return unescape( document.cookie.substring( y, endOfCookie ) );
	}
	x = document.cookie.indexOf( " ", x ) + 1;
	if ( x == 0 )
	break;
	}
	return "";
	}

	for(var i=1;i<=$('.main_popup').length;i++){
		if ( notice_getCookie( "Notice"+i ) != "done" ){
			$('.main_popup'+i).show();
		}else{
			$('.main_popup'+i).hide();
		}
	}
	/////////////////////////////////////////////////

	// 메인 팝업 높이값
	var main_popup = $('.main_popup').height();
	var main_popup_len = $('.main_popup:visible').length;
	$('#header').css({
		top:30+(main_popup*main_popup_len)
	});

	// 메인 팝업 닫기
	$('.main_popup_close').each(function(idx){
		$(this).click(function(e){
			e.preventDefault();
			$(this).parent().parent().slideUp();
			$('#header').stop().animate({
				top:"-="+ $(this).parent().parent().height() +""
			});
		})
	});

	// email link 삽입
	$('a[href="#"]').each(function(){
		if($(this).text().indexOf('@') > -1){
			var email = $(this).text();
			$(this).attr('href','mailto:'+email+'');
		}
	});

	// 내비게이션
	$('.gnb > li').hover(function(){
		$('.submenu').hide();
		$(this).find('.submenu').show();
	},function(){
		$('.submenu').hide();
	})

	// 창업동아리 현황 슬라이드
	var mainslider = $('.club_slider .bxslider').bxSlider({
		auto: true,
	    pager:false,
	    slideWidth: 285,
	    maxSlides: 4,
	    moveSlides: 1,
	    slideMargin: 20
	});

	// 하단 기업로고 슬라이드
	var bt_slider = $('.bottom_slider_inner .bxslider').bxSlider({
		pager:false,
	    slideWidth: 141,
	    maxSlides: 5,
	    moveSlides: 1,
	    slideMargin: 70
	 });

	$('.focus_tab').click(function(e){
		e.preventDefault();
		var idx = $(this).parent().index()+1;

		$('.focus_tab').removeClass('on');
		$(this).addClass('on');
		$('.focuson_article').hide();
		$(this).next('.focuson_article').show();

		$('.focuson_2, .focuson_3').hide();
		$('.focuson_2-'+idx).show();
		$('.focuson_3-'+idx).show();

		$(".ellipsis").dotdotdot();
	});

	$('.evidence_wrap > .tab > li > .tab_li').click(function(e){
		e.preventDefault();
		var idx = $(this).parent().index();
		$('.evidence_wrap .child_wrap').hide();
		$('.evidence_wrap > .tab > li').eq(idx).find('.child_wrap').show();
		$('.evidence_wrap > .tab > li > .tab_li').removeClass('on');
		$('.evidence_wrap > .tab > li').eq(idx).find('.tab_li').addClass('on');
	});

	// 파일첨부 찾아보기
	var fileTarget = $('.filebox .upload-hidden');

	fileTarget.on('change', function(){ // 값이 변경되면
		if(window.FileReader){ // modern browser
			var filename = $(this)[0].files[0].name;
		}else{ // old ie
			var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출
		}

		// 추출한 파일명 삽입
		$(this).siblings('.upload-name').val(filename);
	});

	// 공지사항/언론보도 게시판보기 버튼
	$('.newsroom .btn_type_view button').click(function(){
		var idx = $(this).parent().index();

		$('.newsroom .btn_type_view button').removeClass('on');
		$(this).addClass('on');
		
		if(idx==0){
			$('.notice_wrap').show();
			$('.mediareport_wrap').hide();
		}else{
			$('.notice_wrap').hide();
			$('.mediareport_wrap').show();
		}
	});

	//멘토링 상세보기 over
	$('.mentoring_list_div .img').hover(function(){
		var hover = "";
		hover += '<div class="hover">';
		hover += 	'<button type="button" class="hover_btn">';
		hover += 		'<img src="../images/sub/mentoring/mentor_over.png" width="218" height="184" alt="상세보기">';
		hover += 	'</button>';
		hover += '</div>';
		$(this).append(hover);

		$(this).find('.hover').show();
		$(this).find('.mouse').hide();
	},function(){
		$(this).find('.hover').remove();
		$(this).find('.mouse').show();
	});

	//지원사업 안내 상세보기 over
	$('.lv_wrap li a').hover(function(){
		var hover = "";
		hover += '<img src="../images/sub/club/club_img_over.png" class="lv_over" >';
		$(this).find('img').after(hover);

		$(this).find('.lv_over').show();
	},function(){
		$(this).find('.lv_over').remove();
	});

	// 메인 오른쪽 버튼 클릭시 컨텐츠 위치로 이동
	var menu = $('.section_btn li');
    var contents = $('.section');

    menu.click(function(e){
       e.preventDefault();
       var tg = $(this);
       var i = tg.index();
       
       var section = contents.eq(i);
       var tt = section.offset().top;
       
       $('html, body').stop().animate({scrollTop:tt},500);
    });

    // select box
    var select_m = $(".select_mail select");
    var select_c = $(".select_cus select");
    
    select_m.change(function(){
        var select_name = $(this).children("option:selected").text();
        var select_val = $(this).children("option:selected").val();
        $(this).siblings("label").text(select_name);
        $(this).parent().prev().val(select_val);
        if($(this).children("option:selected").val() != ""){
        	$(this).parent().prev().attr('readonly',true);
        }else{
        	$(this).parent().prev().attr('readonly',false);
        }
    });

    select_c.change(function(){
        var select_name = $(this).children("option:selected").text();
        var select_val = $(this).children("option:selected").val();
        $(this).siblings("label").text(select_name);
    });

////////////////////////// 팝업 관련 script //////////////////////////
    function layerOpen(elem){
		$('.bg').fadeIn();
		$(elem).fadeIn();
		var tx = $(elem).width()/2;
		var ty = $(elem).height()/2;
		var h = $(window).height();
		
		// 팝업 높이가 해상도보다 크면 position:fixed 해제
		if($(elem).height()+50 > h ){
			$(elem).css({position:'absolute',left:'50%',top:'32px',marginLeft:-tx+"px",marginTop:0});
			$("html").css("overflow-y","scroll");
		}else{
			$(elem).css({left:'50%',top:'50%',marginLeft:-tx+"px",marginTop:-ty+"px"});
			$("html").css("overflow","hidden");
		}
	}

    // 멘토링 상세보기 팝업 열기
	$('.mentoring_list_div').on('click','.hover_btn',function(e){
		e.preventDefault();
		layerOpen('.mentoring_detailView_popup');
	});

	// 멘토링 신청하기 팝업 열기
	$('.mentoring_list_div .mentor_app').click(function(e){
		e.preventDefault();
		layerOpen('.mentoring_app_popup');
	});

	// 멘토링 신청완료 팝업 열기
	$('.btn_mentoring_app').click(function(e){
		e.preventDefault();
		$('.mentoring_app_popup').fadeOut();
		layerOpen('.mentoring .partinership_comp_popup');
	});

	// 파트너쉽 신청하기 팝업 열기
	$('.partnership_app').click(function(e){
		e.preventDefault();
		layerOpen('.partnership_popup');
	});

	// 파트너쉽 신청완료 팝업 열기
	$('.btn_partnership').click(function(e){
		e.preventDefault();
		$('.partnership_popup').fadeOut();
		layerOpen('.partnership .partinership_comp_popup');
	});

	$('#calendar').on('click','.fc-list-link',function(e){
		e.preventDefault();
		layerOpen('.event_popup');
	});
	$('#calendar').on('click','.fc-day-grid-event',function(e){
		e.preventDefault();
		layerOpen('.event_popup');
	});

	// 팝업 닫기
	$('.popup .close').click(function(){
		$('.bg').fadeOut();
		$("html").css("overflow-y","scroll");
		$(this).parent().hide();
	});
////////////////////////// 팝업 관련 script End//////////////////////////	

});
function line_color_fn()
{
	$(".fc-list-item").each(function(index) {
		if(index%2==1)
		{
			$(this).css("background-color","#fafafa");
		}
	});
	if($('.fc-list-view').children().children().hasClass('fc-list-empty-wrap2')){
		$('.fc-list-view').css({'min-height':'300px'})
	}else{
		$('.fc-list-view').css({'min-height':0})
	}
}