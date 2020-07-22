<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	// $year = 2015;
	$year = date('Y');
	$taiwan_year = $year - 1911; //為何要減1911? 請看 http://zh.wikipedia.org/wiki/%E6%B0%91%E5%9C%8B%E7%B4%80%E5%B9%B4
	
	echo "現在是民國{$taiwan_year}年"; //輸出 現在是民國104年
	
	echo "<hr>";
	
	$service = 1.1;	//一成服務費， 會寫1.1 是因為 100%(原價) + 10％(一成) = 110%，換成可計算的數字就是 1.1，
	$price = 599; 	//晚餐價位
	$man = 3;		//三個人吃
	$discount = 0.9;//打九折
	$total = $price * $man * $discount;
	$total1 = ($price * $man * $discount) * $service;

	echo "晚餐時段{$price}/人，共{$man}位客官，打九折未含服務費金額NT:" . $total . "加上1成服務費後的總金額NT:{$total1}。請問刷卡或付現？";
?>