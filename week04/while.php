<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	//while迴圈
	$a = 0; 		//$a 的內容為 0
	echo "<ol>";	//使用 ol 列表的標籤
	while($a < 100)	//當 $a < 100 時，就做迴圈內容，直到 $a < 100 是錯的時候，才停止回圈，也就是 $a 為 100 或以上的時候
	{
		echo "<li>a變數是:{$a}</li>";		//每個列表內容使用 <li> </li> 包起來
		$a += 1;						//執行輸出後，最後再把 $a + 1 並存回 $a 中
	}
	echo "</ol>";	// ol 列表標籤的結束
?>