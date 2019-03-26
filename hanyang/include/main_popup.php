<script type="text/javascript">
function notice_setCookie( name, value, expiredays )
{
var todayDate = new Date();
todayDate.setDate( todayDate.getDate() + expiredays );
document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}
function notice_closeWin()
{
for(var i=0;i<document.forms.length;i++){
	if ( document.forms[i].getElementsByTagName('input')[0].checked )
	notice_setCookie( "Notice"+(i+1), "done" , 1); // 1=하룻동안 공지창 열지 않음
	}
}

function na_call(str){ eval(str);}
</script>

<!-- <div class="main_popup main_popup1" style="background:#ddd;">
	<div class="inner">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima incidunt optio assumenda iure, itaque dicta deleniti cumque perferendis. Ipsa ad inventore voluptate voluptatibus, molestias dolore cumque tenetur modi temporibus aliquid? Eos, commodi dicta accusantium dolore, temporibus doloribus! Tempora quos hic rerum sed veniam quaerat, facilis optio quidem, nostrum saepe eius blanditiis repudiandae. Saepe nemo aspernatur neque, expedita, numquam possimus voluptatem ad autem veritatis. Pariatur aliquid ipsa suscipit perferendis, dolor dolore culpa animi. Aut cumque illo ipsam, dolores temporibus perferendis deserunt vitae similique fugiat quod, numquam totam minima mollitia aliquid accusantium, omnis quidem quae necessitatibus fuga harum illum. Reiciendis, natus, cumque.	
		<button type="button" class="main_popup_close">닫기</button>
		<form name="form1">
			<label for="notice1">
				<input type="checkbox" name="Notice1" id="notice1" onClick="notice_closeWin()">오늘은 이창을 다시 열지않음
			</label>
		</form>
	</div>
</div>
<div class="main_popup main_popup2" style="background:#ccc;">
	<div class="inner">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima incidunt optio assumenda iure, itaque dicta deleniti cumque perferendis. Ipsa ad inventore voluptate voluptatibus, molestias dolore cumque tenetur modi temporibus aliquid? Eos, commodi dicta accusantium dolore, temporibus doloribus! Tempora quos hic rerum sed veniam quaerat, facilis optio quidem, nostrum saepe eius blanditiis repudiandae. Saepe nemo aspernatur neque, expedita, numquam possimus voluptatem ad autem veritatis. Pariatur aliquid ipsa suscipit perferendis, dolor dolore culpa animi. Aut cumque illo ipsam, dolores temporibus perferendis deserunt vitae similique fugiat quod, numquam totam minima mollitia aliquid accusantium, omnis quidem quae necessitatibus fuga harum illum. Reiciendis, natus, cumque.	
		<button type="button" class="main_popup_close">닫기</button>
		<form name="form2">
			<label for="notice2">
				<input type="checkbox" name="Notice2" id="notice2" onClick="notice_closeWin()">오늘은 이창을 다시 열지않음
			</label>
		</form>
	</div>
</div> -->