<!-- 若在 windows 看有亂碼，記得加上 <meta charset='utf-8'> 將編碼設定為utf-8，以正確顯示繁體中文 -->
<?php
	$my_name = "蔡孟珂";
	$my_age = 18;
	
	//雙引號中若要放變數，建議用大括號{}包起來。
	//若沒有用{}包起來，有可能會出現錯誤。因為變數後面加字串，會導致系統判斷錯誤。
	echo "<h1>使用雙引號</h1>";
	echo "我叫{$my_name}，今年{$my_age}歲"; // 會輸出出錯
	echo "<br>";
	echo "我叫{$my_name}，今年{$my_age}歲"; // 這樣才正確 會輸出 我叫蔡孟珂，今年18歲
	echo "<br>";
	
	//使用單引號
	echo "<hr><h1>使用單引號</h1>";
	echo '我叫{$my_name}，今年$my_age歲' , '<br>'; // 會輸出 我叫{$my_name}，今年$my_age歲
	// echo "<br>";
	//單引號範例
	$a = 50;
	$b = 200;
	echo '$a = ' , $a , '<br>'; 
	echo '$b = ' , $b , '<br>';
	echo '#a * $b = ' , $a * $b , '<br>';
	echo "<br>";
	
	//變數後面加字串，會導致系統判斷錯誤，所以要用{}包覆。
	echo "<hr><h1>字串中的變數需要用空白區隔，或用{}包住</h1>";
	echo "My name is $my_name, I'm $my_age years ago;"; // 這會輸出錯誤訊息
	echo "<br>";
	echo "My name is $my_name, I'm {$my_age}years ago;"; // 這才是正確的
	echo "<br>";
	echo "My name is $my_name, I'm $my_age years ago;"; // 或用空格區隔開
?>
<hr>
<style>
	img{
		width:800px;
	}
</style>
<h1>使用echo 輸出包含 html 標籤的字串</h1>
正常來說，有些標籤會有屬性質，若使用php印出包含屬性的標籤，就得要注意。
<img src="images/my_dog_rip.jpg">
<?php 
	//使用php 列印的時候，要注意 單/雙引號的使用
	echo '<img src="images/my_dog_rip.jpg">';
	echo "<hr>";
	echo "<img src='images/my_photo.jpg'>";
?>