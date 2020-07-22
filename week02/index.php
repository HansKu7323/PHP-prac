<?php 
  $my_name = 'ku Hans';
  $my_photo = 'img/IMG_3804.jpeg';
  $my_website = 'http://hansku.epizy.com/?i=1';



?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>week2</title>
</head>
<body>
  <h1>大家好，我是<?= $my_name;?></h1>
  <!-- <img src="img/IMG_3801.jpeg" alt=""> -->
  <img src="<?php echo $my_photo;?>" alt="">
  <a href="<?php echo $my_website;?>">歡迎到我的網頁</a>
</body>
</html>