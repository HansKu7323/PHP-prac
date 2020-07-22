<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	//for迴圈
	// $start_year 初始內容為 2000 數字，當 $start_year 小於等於 2030的時候執行迴圈內容，完成後把 $start_year + 1 並存入 $start_year 中
	// 然後再繼續判別 $start_year 有沒有小於等於 2030 如有就繼續
	$index = 1;
	for($start_year = 2000; $start_year <= 2030; $start_year += 1)
	{
		echo "<p>第{$index}次執行{$start_year}</p>";
		$index += 1;
	}
	echo "最後一次的值{$start_year}";
	echo '<hr>';
	

	
	/**
	 * 特殊運算
	 */
	 
	//一般算法
	$a = 10;
	echo "<p>{$a}</p>"; //輸出 10
	$a = $a + 1;		// $a = 10 + 1
	echo "<p>{$a}</p>"; //輸出 11
	
	echo "<hr>";
	
	
	// ++ 變數自己+1 簡寫
	$b = 10;
	echo "<p>{$b}</p>"; //輸出 10
	$b++;				// $b + 1 後存入 $b 中
	echo "<p>{$b}</p>"; //輸出 11
	
	echo "<hr>";
	
	// -- 變數自己-1 簡寫
	$b = 10;
	echo "<p>{$b}</p>"; //輸出 10
	$b--;				// $b - 1 後存入 $b 中
	echo "<p>{$b}</p>"; //輸出 9
	
	echo "<hr>";
	
	// += 變數+後面的數值，在存回變數 簡寫
	$c = 10;
	echo "<p>{$c}</p>"; //輸出 10
	$c += 1;			//等於 $c = $c + 1
	echo "<p>{$c}</p>"; //輸出 11
	
	echo "<hr>";
	
	$d = 10;
	echo "<p>{$d}</p>"; //輸出 10
	$d += 4;			//等於 $d = $d + 4
	echo "<p>{$d}</p>"; //輸出 14
	
	echo "<hr>";
	
	// -= 變數-後面的數值，在存回變數 簡寫
	$d = 10;
	echo "<p>{$d}</p>"; //輸出 10
	$d -= 4;			//等於 $d = $d - 4
	echo "<p>{$d}</p>"; //輸出 6
	
	echo "<hr>";
	
	// *= 變數*後面的數值，在存回變數 簡寫
	$e = 10;
	echo "<p>{$e}</p>"; //輸出 10
	$e *= 4;			//等於 $d = $d * 4
	echo "<p>{$e}</p>"; //輸出 40
	
	echo "<hr>";
	
	// /= 變數/後面的數值，在存回變數 簡寫
	$f = 10;
	echo "<p>{$f}</p>"; //輸出 10
	$f /= 4;			//等於 $d = $d / 4
	echo "<p>{$f}</p>"; //輸出 2.5
?>
