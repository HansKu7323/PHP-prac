<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>傳遞資料</title>
		
	</head>
	<body>
		<form method="GET" action="show_get.php">
			<p>標題：<input type="text" name="title"></p>
			<p>分類：
				<select name="category">
					<option value="最新消息">最新消息</option>
					<option value="個人作品">個人作品</option>
				</select>
			</p>
			<p>內文：<textarea name="content"></textarea></p>
			<p>
				<label><input type="radio" name="publish" value="發佈">發佈</label>
				<label><input type="radio" name="publish" value="不發佈">不發佈</label>
			</p>
			<p>
				<label><input type="checkbox" name="keyword[]" value="php">php</label>
				<label><input type="checkbox" name="keyword[]" value="html">html</label>
				<label><input type="checkbox" name="keyword[]" value="css">css</label>
				<label><input type="checkbox" name="keyword[]" value="javascript">javascript</label>
			</p>
			<button type="submit">送出</button>
		</form>
	</body>
</html>