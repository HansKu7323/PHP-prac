<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI計算</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container mt-4">
  <div class="row justify-content-center">
    <form action="show.php" method="post">
      <fieldset>
        <legend class="text-center">BMI計算アプリ</legend>
          <label for="height">身長</label>
          <input type="text" name="height" id="height" placeholder="身長を入力ください">cm<br>
          <label for="weight">体重</label>
          <input type="text" name="weight" id="weight"  placeholder="体重を入力ください">kg<br>
          <div class="row justify-content-around">
            <button type="reset">重設</button>
            <button type="submit">迗出</button>
          </div>
      </fieldset>
    </form>
  </div>
</div>
  
</body>
</html>