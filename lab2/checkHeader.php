<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../template/head.php") ?>
  <link rel="stylesheet" href="../index.css">
</head>
<body>
<div id="wrapper">
    <?php $header_text='Лабораторная работа N2 <b>"API.HTTP"' ?>
    <?php include("../template/header.php")?>
    <?php
      $url = 'https://httpbin.org/post';
      $answer = get_headers($url);
    ?>
    <textarea name="" id="" cols="30" rows="20">
      <?php
          print_r($answer);
      ?>
    </textarea>

    <?php include("../template/footer.php")?>
</div>
</body>
</html>