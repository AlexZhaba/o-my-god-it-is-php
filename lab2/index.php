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
    <main class="index-main">
      <a href="./checkHeader.php">Перейти на 2ю страницу</a>
      <form action="https://httpbin.org/post" method="POST" class="form">
        <label for="name">Ваше имя:</label>
        <input type="text" name="name" required>
        <label for="email">Ваша почта:</label>
        <input type="email" name="email" required>
        <select name="question_type">
          <option value="report">Жалоба</option>
          <option value="offer">Предложение</option>
          <option value="thanks">Благодарность</option>
        </select>
        <p for="answer_type">Вариант ответа:</p>
        <div class="container-form">
          <input type="radio" id="contactChoice1"
            name="contact" value="email">
          <label for="contactChoice1">Email</label>
        </div>
        <div class="container-form">
          <input type="radio" id="contactChoice2"
            name="contact" value="phone">
          <label for="contactChoice2">Phone</label>
        </div>
        <label for="question">Ваш вопрос:</label>
        <textarea name="question" cols="30" rows="10"></textarea>
        <button>Отправить</button>
      </form>
    </main>
    <?php include("../template/footer.php")?>
  </div>
</body>
</html>