var sct = $(window).scrollTop();

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
		w_h = window.innerWidth;

		App.main.popup();
	},
	popup : function(){
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
		$(document).on("click touch",'.bg, .btn_close',function(event){
			event.preventDefault();
			$('.popup').hide();
			$('.bg').fadeOut().remove();
			$("a[data-focus~=on]").focus(); // 표시해둔 곳으로 초점 이동
			$("a[data-focus~=on]").removeAttr("data-focus");
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
	}
}

$(function(){ 
	App.init();
	App.main.init();
});
