var App = function() {

	var path = window.location.pathname;
		path = path.replace(/\/$/, "");
		path = decodeURIComponent(path);
	var sct = $(window).scrollTop();

	var uiInit = function() {

		// 브라우저 및 버전을 구하기 위한 변수들.
	    'use strict';
	    var agent = navigator.userAgent.toLowerCase(),
	        name = navigator.appName,
	        browser,
	        os = '';
	    
	    // MS 계열 브라우저를 구분하기 위함.
	    if(name === 'Microsoft Internet Explorer' || agent.indexOf('trident') > -1 || agent.indexOf('edge/') > -1) {
	        browser = 'ie';
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

	    // Mac OS
	    if (navigator.userAgent.indexOf('Mac OS X') > -1) {
	    	os = 'mac'
	    }

	    // IE: ie7~ie11, Edge: edge, Chrome: chrome, Firefox: firefox, Safari: safari, Opera: opera
	    document.getElementsByTagName('html')[0].className = browser;
	    document.getElementsByTagName('body')[0].className = os;

		if( /Android/i.test(navigator.userAgent)) {
		    // 안드로이드
		    $("body").addClass("android");
		} else if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
		    // iOS 아이폰, 아이패드, 아이팟
		    $("body").addClass("ios");
		}

	    // 파일업로드
		var fileTarget = $('.filebox .upload-hidden');
		fileTarget.on('change', function(){ // 값이 변경되면
			if(window.FileReader){ // modern browser
				var filename = $(this)[0].files[0].name;
			} else { // old IE
				var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출 } // 추출한 파일명 삽입
			}
			$(this).siblings('.upload-name').val(filename);
		});

		$(".btn_menu").click(function(e){
			e.preventDefault();
			$("#nav").stop().slideToggle(400,function(){
				$("#nav .menu > li > ul").slideUp();
				$("#nav .menu > li").removeClass("open");
			});
		});

		$(".btn_search").click(function(e){
			e.preventDefault();
			$("#searchWrap").stop().slideToggle(400,function(){
				$(this).find("input[type=text]").val("");
			});
		});

		$("#nav .menu > li").click(function(e){
			if($(this).find('ul').length > 0){
				e.preventDefault();
				$(this).find('ul').stop().slideToggle();
				$(this).toggleClass('open');
			}
		});
		$("#nav .menu > li > ul > li").click(function(e){
			e.stopPropagation();
		});

		// 팝업 확인버튼 팝업 닫기
		$(".btn_confirm").click(function(e){
        	e.preventDefault();
        	$(".btn_close").click();
        });

        $("#indicator .indi_menu li").click(function(e){
        	e.preventDefault();
        	$(this).find(">ol").stop().slideToggle();
        });

		if($(".visual").length > 0){
			$("#nav").removeClass('sub');
		}else {
			$("#nav").addClass("sub");
		}
	};

	return {
        init: function() {
            uiInit(); // Initialize UI Code
        }
    };
}();

$(function(){
	App.init();
});

window.onload = function(){
	$('.grid_wrap').masonry({
		// options
		itemSelector: '.grid-item',
		columnWidth: '.grid-sizer',
		gutter: '.gutter-sizer',
		itemSelector: '.grid-item',
		percentPosition: true
	});

	$('.grid_wrap').css({visibility:'visible'});

	$('.grid_wrap > .grid-item').each(function(){
		var tgH = $(this).height();
		$(this).find(".table").height(tgH);
	});
}
$(window).resize(function(){
	$('.grid_wrap > .grid-item').each(function(){
		var tgH = $(this).height();
		$(this).find(".table").height(tgH);
	});
});
// 팝업 디폴트
function openPopup(popup){
	$(popup).bPopup({
        closeClass: 'btn_close',
        opacity: 0.53,
        position: ['auto','auto'] //x, y
    });
}