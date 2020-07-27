<?php
// var_dump($_POST['height'], $_POST['weight']);
$weight = $_POST['weight'];
$height = $_POST['height'] / 100;

if(is_numeric($weight) && is_numeric($height)){
  // $bmi = $_POST['weight'] / ($_POST['height'] * $_POST['height']);
  $bmi = $weight / ($height * $height);
}else{
  echo "入力を間違いました";
}

   if($bmi >= 18.5 && $bmi <25){
    $result = "普通体重";
   }else if($bmi <= 18.5){
    $result = "痩せ";
   }else{
     $result = "肥満";
   }

 

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>計算結果</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container ">
  <div class="text-center">
    <h1>計算結果</h1>
    <div>BMI <input type="text" value="<?= round($bmi, 2)?>"></div>
    <div>肥満の判定 <input type="text" value="<?= $result?>"></div>
  </div>
</div>

  
</body>
</html>