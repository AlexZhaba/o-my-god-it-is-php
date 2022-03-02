<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("template/head.php") ?>
  <link rel="stylesheet" href="./index.css">
</head>
<body>
  <div id="wrapper">
    <?php $header_text='Лабораторные работы по предмету <b>"Основы серверной веб-разработки"' ?>
    <?php include("template/header.php") ?>
    <main class="index-main">
    <?php
      $labs = array(
        array(
          "github_link" => "https://github.com/AlexZhaba/o-my-god-it-is-php/blob/master/index.php",
          "host_link" => "http://phplabs.std-1734.ist.mospolytech.ru/index.php",
        ),
      );

      for ($i = 0; $i < count($labs); ++$i) {
        $index = $i + 1;
        $github_link = $labs[$i]['github_link'];
        $host_link = $labs[$i]['host_link'];

        echo "
          <div class='container lab'>
            <div>Лабораторная работа №$index</div>
            <a href='$github_link'>Github</a>
            <a href='$host_link'>Host</a>
          </div>
        ";
      }
    ?>
    </main>
    <?php include("template/footer.php") ?>
  </div>
</body>
</html>