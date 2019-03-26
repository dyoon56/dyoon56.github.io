<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

	<link href="/css/common.css" rel="stylesheet" type="text/css"/>
	<link href="/css/main.css" rel="stylesheet" type="text/css"/>
	<link href="/css/sub.css" rel="stylesheet" type="text/css"/>
	<link href="/images/common/favicon.ico" rel="shortcut icon" />
	<link href='/css/lib/jquery-ui.min.css' rel='stylesheet' />
	<link href='/css/lib/fullcalendar.min.css' rel='stylesheet' />
	<script src="/js/lib/jquery.min.js" type="text/javascript"></script>
	<script>
	$.noConflict();
	jQuery(document).ready(function(){
   		jQuery('#calendar').fullCalendar({
			theme: true,
			header: {
				left: 'month,listMonth',
				center: 'prev,title,next',
				right:''
			},
			navLinks: true,
			editable: false,
			timeFormat: 'HH:mm',
			displayEventEnd: {
			    month: true,
			    basicWeek: true,
			    "default": true
			},
			events: [
				{
					title: '2017 경기도 대학생 융합기술 창업지원사업 설명회',
					start: '2017-03-08T13:30:00',
					end: '2017-03-08T14:30:00',
					exp: '2017 경기도 대학생 융합기술 창업지원사업 설명회',
					place: '창업보육센터 106호',
					school : 'in', //in 교내 //out 교외
					key : 1
				},
				{
					title: '2017 ERICA SW융합 페스티벌',
					start: '2017-03-10T11:00:00',
					end: '2017-03-11T21:00:00',
					exp: '세계최대 2017창업캠프! 창업역량을 강화할 수 있는기회',
					place: 'ERICA 캠퍼스 게스트하우스 3층 컨퍼런스홀',
					school : 'in', //in 교내 //out 교외
					key : 5
				}
			]
		});
	});
	</script>
	<script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="/js/jquery.bxslider.min.js"></script>
	<script src="/js/jquery.dotdotdot.min.js"></script>
	<script src='/js/lib/moment.min.js'></script>
	<script src='/js/lib/fullcalendar-com.js'></script>
	<script src='/js/lib/ko.js'></script>
	<script src="/js/script.js" type="text/javascript"></script>
	<!--[if (gte IE 6)&(lte IE 8)]><script type="text/javascript" src="/js/selectivizr-min.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="/js/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="/js/placeholders.min.js"></script><![endif]-->
	<title>한양대학교 창업교육센터</title>
	<script>

	// 모바일 접속 체크
	var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
	for (var word in mobileKeyWords){
	    if (navigator.userAgent.match(mobileKeyWords[word]) != null){
	        location.href = "/mobile/index.php";
	        break;
	    }
	}
	</script>
</head>