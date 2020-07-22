<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	
	$i_love = "朋友";
	//switch 判別式
	//符合 case 定的條件時，就執行
	//遇到 break; 就跳出判別，若忘了寫 break; 就會繼續跑下去唷。
	switch ($i_love){
		case "女朋友":		
			echo "忠心耿耿";
			
			break;
		case "小三":
			echo "恩～～要小心...這樣不好唷";
			
			break;
		case "隔壁帥哥":
			echo "我支持多元成家方案";
			
			break;
		default:
			echo "太博愛了";
			
			break;
	}
	
	
	/**
	 * 另一種寫法，去掉括弧用「分號」以及 endswitch; 結束
	 */
	/*
	switch ($i_love):
		case "女朋友":		
			echo "忠心耿耿";
			
			break;
		case "小三":
			echo "恩～～要小心...這樣不好唷";
			
			break;
		case "隔壁帥哥":
			echo "我支持多元成家方案";
			
			break;
		default:
			echo "太博愛了";
			
			break;
	endswitch;
	
*/
?>