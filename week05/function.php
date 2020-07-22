<?php
	//顯示系統php資訊 方法
    //phpinfo();
	
	//使用 strlen() 方法，取得字元長度
	$length = strlen("abcde");
    echo $length . "<br>";
	
	$leng = strlen("中文字串");
    echo $leng . "<br>";
	
	echo "<hr>";
	//使用 mb_strlen() 方法，取得字數長度
	$length = mb_strlen("abcec");
	echo $length . "<br>";
	
	$length = mb_strlen("中文字串");
    echo $length . "<br>";
	
	
	echo "<hr>";
	//使用 substr() 取得字串中部分文字
	$str = "abcdefg";
	$get = substr($str, 0, 3);
	echo $get . "<br>";//取得abc
	
	//使用 mb_substr() 取得中文字串中部分文字
	$str = "IE 瀏覽器要被微軟拋棄了，回顧一下它被網民嫌棄的一生吧";
	$get = mb_substr($str, 0, 6);
	echo $get . "<br>";//印出IE 瀏覽器
	
	echo "<hr>";
	
	//使用 str_replace() 把字串中的文字置換
	$str = "IE 瀏覽器要被微軟拋棄了，回顧一下它被網民嫌棄的一生吧";
	$get = str_replace("IE", "爛爆", $str);
	echo $get . "<br>";//爛爆 瀏覽器要被微軟拋棄了，回顧一下它被網民嫌棄的一生吧
	
	echo "<hr>";
	/**
	 * show_year
	 * 自訂函式顯示年份
	 * 
	 */
	function show_year(){
		//該函數要執行的事情
		echo "現在是 ".date("Y")." 年";
	}
	
	//執行顯示年份
	show_year();
	echo "<hr>";

	function show_taiwan_year(){
		$year = date("Y")-1911;
		echo '現在是民國',$year,'年','<br>';
		echo "民國{$year}年";
	}
	show_taiwan_year();
	echo '<br>';
	
	function taiwan_year(){
		$y = date("Y")-1911;
		return $y;
	}
	// echo taiwan_year();
	$tw_Y = taiwan_year();
	echo $tw_Y;
	echo '<br>';

	function test($st){
		echo $st;
	}
	test('你好');
	echo '<hr>';



	/**
	 * show_level
	 * 顯示等級 
	 * 分級參考 http://www.stuapp.nsysu.edu.tw/tch_sco_degree/desc.html
	 * @param string $score 帶入的分數
	 */
	function show_level($score){
		$msg='';
		
		if($score >= 90 && $score <= 100){
			$msg='A+';
		}elseif($score >= 85 && $score <= 89){
			$msg='A';
		}elseif($score >= 80 && $score <= 84){
			$msg='A-';
		}elseif($score >= 77 && $score <= 79){
			$msg='B+';
		}elseif($score >= 73 && $score <= 76){
			$msg='B';
		}elseif($score >= 70 && $score <= 72){
			$msg='B-';
		}elseif($score >= 67 && $score <= 69){
			$msg='C+';
		}elseif($score >= 63 && $score <= 66){
			$msg='C';
		}elseif($score >= 60 && $score <= 62){
			$msg='C-';
		}elseif($score < 60){
			$msg='D 不及格';
		}
		return $msg;	//return 為回傳，後面接著的變數，就是最後要傳出來的內容。
	}
	//執行顯示成績
	$str = show_level(100);
	echo $str;
	
	echo "<hr>";
	
	$students = array(
		array(
			"name" => '小王',
			"score" => 59
		),
		array(
			"name" => '小三',
			"score" => 75
		),
		array(
			"name" => '小強',
			"score" => 96
		)
	);
	
	foreach ($students as $a_student) {
		echo "<p>";
		echo "名字:" . $a_student['name'];
		$score = show_level($a_student['score']);
		echo " 成績:" . $score;
		echo "</p>";
	}
?>  