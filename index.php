<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./index.css">
  <title>Жаворонков Александр Арсеньевич, группа 211-321, PHP</title>
</head>
<body>
  <div id="wrapper">
    <header class="container index-header">
      <span>Лабораторные работы по предмету <b>"Основы серверной веб-разработки"</b></span>
    </header>
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
    <footer class="container index-footer">
      <span>Жаворонков Александр Арсеньевич, группа 211-321</span>
    </footer>
  </div>
</body>
</html>