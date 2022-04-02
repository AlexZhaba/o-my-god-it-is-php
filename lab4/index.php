<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../template/head.php") ?>
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="./style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div id="wrapper">
    <?php $header_text='Лабораторная работа N4 <b>"Массивы и Функции"' ?>
    <?php include("../template/header.php")?>
    <main class="index-main">
      <div class="calculator">
        <div class="calculator__screen" id="calculator__screen">
          
        </div>
        <div class="calculator__body">
          <button class="calculator__button">0</button>
          <button class="calculator__button">1</button>
          <button class="calculator__button">2</button>
          <button class="calculator__button">3</button>
          <button class="calculator__button">4</button>
          <button class="calculator__button">5</button>
          <button class="calculator__button">6</button>
          <button class="calculator__button">7</button>
          <button class="calculator__button">8</button>
          <button class="calculator__button">9</button>
          <button class="calculator__button"><</button>
          <button class="calculator__button">X</button>
          <button class="calculator__button">+</button>
          <button class="calculator__button">-</button>
          <button class="calculator__button">*</button>
          <button class="calculator__button">/</button>
          <button class="calculator__button">(</button>
          <button class="calculator__button">)</button>
          <button class="calculator__button calculator__submit">CALCULATE</button>
        </div>
      </div>
    </main>
    <?php include("../template/footer.php")?>
  </div>
</body>
</html>