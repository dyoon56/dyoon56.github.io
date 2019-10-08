var path = window.location.pathname;
	path = path.replace(/\/$/, "");
	path = decodeURIComponent(path);
var sct = $(window).scrollTop();

(function($){
	$.fn.extend({
	    tabMethod: function(){
			$(".tab li").on("click focus",function(e){
				e.preventDefault();

				var tg = $(this).find("a").attr("href");

				$(this).siblings("li").removeClass("active");
				$(this).addClass("active");

				$(this).parent().siblings(".tab_content").hide();

				if(tg == "#all"){
					$(this).parent().siblings(".tab_content").show();
				}else{
					$(""+tg+"").show();
				}
			});
		}
	});
})(jQuery);

$.namespace = function() {
    var a = arguments, o = null, i, j, d;
    for (i = 0; i < a.length; i = i + 1) {
        d = a[i].split(".");
        o = window;
        for (j = 0; j < d.length; j = j + 1) {
            o[d[j]] = o[d[j]] || {};
            o = o[d[j]];
        }
    }
    return o;
};

$.namespace("App");
App = {
	init : function(){
		App.chkBrowser();
	},
	chkBrowser : function(){
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
	}
}

$.namespace("App.main");
App.main = {
	init : function(){
		App.main.gnb();
		App.main.setSwipe();
		App.main.bindEvent();
		App.main.scrollEvent();
		App.main.resizeEvent();
		App.main.title();
		App.main.indicator();
		App.main.fileBox();
		App.main.popup();
		App.main.motionEvent();

		$("#wrap").addClass("loaded");
		$(".sub_visual h2,.sub_visual p").addClass("active");

		if($(".sub_visual").length){
			$("#container").addClass("sub_page");
		}

		sct = $(window).scrollTop();
			
		$(".opacityUp, [class^='page_sub_tit'], [class^='page_sub_tit'] + p,.title_border").each(function(){
			var tgTop = $(this).offset().top  - $(window).height();
			if(sct > tgTop){
				$(this).addClass("active");
			}
		});

		if(sct > 0){
			$("#mHeader").addClass("fixed");
		}else{
			$("#mHeader").removeClass("fixed");
		}
	},
	setSwipe : function(){

		//메인 슬라이더 갯수
		var mainSlider_len = $('#visual').children('div').length;

		if (mainSlider_len > 1) {
			$('#visual').on('init', function(){
				$(this).append('<button id="mainSliderBtn">자동재생/멈춤</button>');
			}).slick({
                fade:true,
				dots:true,
				infinite: true,
				slidesToShow: 1,
                slidesToScroll: 1,
				arrows:true,
				autoplay: true,
	  			autoplaySpeed: 2000,
	  			speed:1500
            });
		}

		$('#mainSliderBtn').on({
            'click' : function(){
                if(!$(this).hasClass('pause')){
                    $("#mainFullSlider").slick('slickPause');
                    $(this).addClass('pause');
                }else{
                    $("#mainFullSlider").slick('slickPlay');
                    $(this).removeClass('pause');
                }
            } 
        });

        $(".main_mid_slider .slider").on('init', function(){
			$(".main_mid_slider .slider_tab li").eq(0).addClass("active");
		}).on("beforeChange", function(event, slick, currentSlide,nextSlide){

        }).on("afterChange", function(event, slick, currentSlide,nextSlide){
        	$(".main_mid_slider .slider_tab li").removeClass("active");
			$(".main_mid_slider .slider_tab li").eq(currentSlide).addClass("active");
        }).slick({
            slidesToShow: 2,
			slidesToScroll: 1,
			arrows: true,
			speed: 400,
        });



        $(".main_mid_slider .slider_tab li").click(function(e){
        	e.preventDefault();
        	$(".main_mid_slider .slider_tab li").removeClass("active");
        	$(this).addClass("active");

        	var slideno = $(this).index();

			$(".main_mid_slider .slider").slick('slickGoTo', slideno);
        });

		// 메인 공지사항
        $(".main_notice .slider").slick({
        	infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			vertical: true,
			dots: false,
			arrows: true,
			autoplay: true,
			autoplaySpeed:4000,
			speed: 400,
			pauseOnHover:false
        });
	},
	gnb : function(){
		var img = $("#header .logo img");

		$("#header").on("mouseenter focusin",function(){
			$(this).addClass("hover");
			img.attr("src", img.attr("src").replace("_wh", "_on"));
		});

		$("#header").on("mouseleave blur",function(){
			$(this).removeClass("hover");
			img.attr("src", img.attr("src").replace("_on", "_wh"));
			$("#gnb .depth2").hide();
			$(".gnb_bg").hide();
		});

		$("#gnb > ul > li").on("mouseenter focusin",function(){
			$("#gnb .depth2").hide();
			$(".gnb_bg").show();
			$(this).find(".depth2").show();
		});

		$("#gnb > ul > li").on("mouseleave blur",function(){			
			$(this).find(".depth2").hide();
			$(".gnb_bg").hide();
		});

		$("#header .btn_allmenu").click(function(e){
			e.preventDefault();

			$("#siteMap").show();
			$("#wrap").prepend("<div class='mask'></div>");
		});

		$("#siteMap .btn_allmenu").click(function(e){
			e.preventDefault();

			$("#siteMap").hide();
			setTimeout(function(){ 
				$(".mask").remove();
			}, 400);
		});

		$("#mHeader .btn_m_menu").click(function(e){
			e.preventDefault();

			$("#wrap").append("<div class='bg'></div>");
			$(".bg").fadeIn();
			$("#mGnb").stop().animate({
				right:0
			},function(){
				$("#mGnb .btn_m_close").show();
			});
		});

		$("#mGnb > ul > li > a").click(function(e){
			e.preventDefault();

			$(this).parent().toggleClass("active");
			$(this).next(".depth2").slideToggle();
		});
		$("#mGnb > ul > li > .depth2 li a").click(function(e){
			e.stopPropagation();
		});

		/*키보드 esc 닫기*/
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { // escape key maps to keycode `27`
				$("#siteMap").hide();
				setTimeout(function(){ 
					$(".mask").remove();
				}, 400);
			}
		});

		$(".lang").click(function(e){
			e.preventDefault();

			$(this).toggleClass("active");
			$(this).find("ul").slideToggle();
		});

		$(".lang ul").click(function(e){
			e.stopPropagation();
		});

	},
	bindEvent : function(){
		$(".tab li").length && $(".tab li").tabMethod();

		$( ".datepicker" ).datepicker({
			dateFormat: 'yy-mm' //Input Display Format 변경
            ,showOtherMonths: true //빈 공간에 현재월의 앞뒤월의 날짜를 표시
            ,showMonthAfterYear:true //년도 먼저 나오고, 뒤에 월 표시
            ,yearSuffix: "년" //달력의 년도 부분 뒤에 붙는 텍스트
            ,monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'] //달력의 월 부분 텍스트
            ,monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'] //달력의 월 부분 Tooltip 텍스트
            ,dayNamesMin: ['일','월','화','수','목','금','토'] //달력의 요일 부분 텍스트
            ,dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'] //달력의 요일 부분 Tooltip 텍스트
            ,minDate: "-1M" //최소 선택일자(-1D:하루전, -1M:한달전, -1Y:일년전)
            ,maxDate: "+1M" //최대 선택일자(+1D:하루후, -1M:한달후, -1Y:일년후)
		});
	},
	scrollEvent : function(){
		$(window).scroll(function(){
			sct = $(window).scrollTop();
			
			$(".opacityUp, [class^='page_sub_tit'], [class^='page_sub_tit'] + p, .title_border").each(function(){
				var tgTop = $(this).offset().top  - $(window).height();
				if(sct > tgTop){
					$(this).addClass("active");
				}
			});

			if(sct > 0){
				$("#mHeader").addClass("fixed");
			}else{
				$("#mHeader").removeClass("fixed");
			}

		});
	},
	resizeEvent : function(){

	},
	title : function(){
		// 페이지별 title 변경
		var tit = $("title").text();
		var subTit = $(".sub_visual h2").text();
		var h3Tit = $("h2.page_sub_tit").text();
		var boardViewTit = $(".board_view_top h3").text();

		if(subTit.length){
			if(boardViewTit.length){
				$("title").text(boardViewTit + " > " + h3Tit + " > " + subTit + " > " + tit);
			}else{
				$("title").text(h3Tit + " > " + subTit + " > " + tit);
			}
		}
	},
	indicator : function(){
		// indicator title 변경
		var subTit = $("h2.page_sub_tit");

		$("#indicator .depth1").click(function(e){
			e.preventDefault();
			$(this).toggleClass("active");
			$(this).next().slideToggle();
		});

		if($("#indicator .depth2").length){
			$("#indicator .depth2 li").each(function(){
				if(subTit.text() == $(this).find("a").text()){
					$(this).addClass("on");
				}

				$("#indicator .depth .depth1").text(subTit.text());
			});
		}

		// if($("#indicator .depth").length == 1){
		// 	$("#indicator .depth").eq(0).addClass("active");
		// }else if($("#indicator .depth").length == 2){
		// 	$("#indicator .depth").eq(1).addClass("active");
		// }
	},fileBox : function(){
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
	},popup : function(){
		//팝업
		$("a[rel='modal:open']").click(function(e){
			e.preventDefault();

			var el = $(this);
			var elPop = el.attr("href");
			$('.popup').hide();
			$(""+elPop+"").fadeIn();
			$("#wrap").append("<div class='bg'></div>");
			$(".bg").show();
			el.attr('data-focus','on');

			var target = $(""+elPop+"");
			var win_height = $(window).height();
			var pop_height = target.outerHeight(true);
			var top_value = $(window).scrollTop() + (win_height - pop_height) /2;
			target.attr("tabindex","0");
			target.show().css("top",top_value);
			target.focus();
		});

		/*팝업닫기*/
		$(document).on("click",'.bg, .btn_close, .btn_m_close',function(e){
			e.preventDefault();
			$('.popup').hide();
			$('.bg').fadeOut().remove();
			$("a[data-focus~=on]").focus(); // 표시해둔 곳으로 초점 이동
			$("a[data-focus~=on]").removeAttr("data-focus");

			$("#mGnb .btn_m_close").hide();
			$("#mGnb").stop().animate({
				right:"-240px"
			});
			$("#mGnb > ul > li").removeClass("active");
			$("#mGnb > ul > li > .depth2").stop().slideUp();
		});

		/*키보드 esc 팝업닫기*/
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { // escape key maps to keycode `27`
				$('.popup').hide();
				$('.bg').fadeOut().remove();
				$("a[data-focus~=on]").focus(); // 표시해둔 곳으로 초점 이동
				$("a[data-focus~=on]").removeAttr("data-focus");
			}
		});
	},motionEvent:function(){

		$('.motion_card').each(function() {

			var $this = $(this);
			var off_set = $this.attr('data-offset');
			var tl = new TimelineLite({paused:true});

			if(off_set == undefined){
			    off_set = '100%';
			}

			TweenMax.set($this, {css:{transformPerspective:400, transformStyle:"preserve-3d"}});
			tl.from($this, 1.6, {y:'40%', z: 40, rotationX:4,force3D:true, ease:Power3.easeOut});

			tl.from($this, 0.5, {autoAlpha:0, ease:Power3.easeOut},"-=1.6");

			$this.waypoint(function() {
				tl.play();
				this.destroy();
			}, {
				offset: off_set
			});

		});

	}
}

$(function(){ 
	App.init();
	App.main.init();
});
