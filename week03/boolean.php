<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	$good_to_go = true; 	//一個變數 $good_to_go 放了一個 true 的布林變數，若用 echo 輸出，會是 1
	$is_good_drink = false; //一個變數 $is_good_drink 放了一個 false 的布林變數，若用 echo 輸出，會是空白
	
	echo '$good_to_go echo 結果是:';
	echo $good_to_go;
	echo "<hr>";
	echo '$is_good_drink echo 結果是:';
	echo $is_good_drink;
?>