<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	//如果陣列中沒有任何東西，則是空陣列。但 $movies 依然是陣列的型態喔
	$movies = array();
	
	//一個 party_need 陣列變數，裡面放了七個字串
	$party_need = array("可口可樂", "雪碧", "洋芋片", "衛生杯", "啤酒", "PS4", "XBOX");
	
	//使用 print_r(); 方法，將陣列輸出
	echo 'party 需要買的項目';
	print_r($party_need);
	echo "<hr>";
	echo($party_need);//echo無法輸出陣列，會出現錯誤
	
	//輸出 html 的 <hr> 分隔線
	echo "<hr>";
	
	
	//紅酒茄汁肉醬義大利麵需要的食材
	$pasta = array(
		"豬絞肉",		//索引值 0
		"橄欖油",		//索引值 1
		"洋蔥",		//索引值 2
		"蒜頭",		//索引值 3
		"牛番茄",		//索引值 4
		"番茄醬",		//索引值 5
		"起司粉",		//索引值 6
		"紅酒",		//索引值 7
		"月桂葉",		//索引值 8
		"義大利麵",	//索引值 9
		"鹽巴"		//索引值 10
	);
	$a = '123';
	$b = 123;
	$c = true;
	//印出蒜頭
	echo $pasta[3];
	print_r($pasta[4]) ;
	echo '<br>';
	echo 'print_r() =>';
	print_r('abce');
	echo '<br>';
	print_r(100);
	echo '<br>';
	print_r(true);
	echo "<hr>";
	var_dump($pasta);
	echo '<br>';
	var_dump($a);
	echo '<br>';
	var_dump($b);
	echo '<br>';
	var_dump($c);
	echo "<hr>";

	
	//修改某索引的內容，假設把 洋蔥 換成 青蔥
	$pasta[2] = "青蔥";
	
	//$pasta 索引值為 2 的內容，已被換成 青蔥，所以輸出結果不再是 洋蔥，而是 青蔥
	echo $pasta[2];
  
	echo "<hr>";
	//刪除陣列某個索引值
	unset($pasta[7]);	//把索引值 7 包含內容刪除。
	
	print_r($pasta);	//使用print_r 全部顯示$pasta，會發現少了紅酒
	echo "<hr>";
	
	//先顯示 $party_need 整個內容
	print_r($party_need);
	//把 $party_need 用 unset() 刪除
	unset($party_need);
	print_r($party_need); //若再次要用 $party_need 會出現錯誤，因為已經沒有 $party_need 這變數了
?>
