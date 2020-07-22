<?php
	//一個 party_need 陣列變數，裡面放了七個字串
	$party_need = array("可口可樂", "雪碧", "洋芋片", "衛生杯", "啤酒", "PS4", "XBOX");

	//自己設定陣列的key和value
	$news = array(
		"title" => "新聞標題",
		"date" => "2020/07/18",
		"reporter" => "Hans"
	);
?>
<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>party 準備物品</title>
	</head>

	<body>
		<h2>請購買以下商品，以供party使用</h2>
		<ul>
			<?php
				//foreach迴圈，使用它來根據 $party_need 裡面每個項目進行處理，有幾個就處理幾次
				foreach ($party_need as $key => $value) {
					echo "<li>{$key}內容是{$value}</li>";
				}


				echo "<hr>";
				print_r($news);
				echo "<br>";
				var_dump($news);
				foreach ($news as $key => $value) {
					echo "<li><a href='#'>{$value}</a></li>";
				}
			?>
		</ul>
		<hr>
		<?php
			echo "標題:" , $news['title'] , "<br>";
			echo "日期:" , $news['date'] , "<br>";
			echo "記者:" . $news['reporter'] . "<br>";
		
		
		
		?>





	</body>
</html>
