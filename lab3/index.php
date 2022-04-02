<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../template/head.php") ?>
  <link rel="stylesheet" href="../index.css">
</head>
<body>
  <div id="wrapper">
    <?php $header_text='Лабораторная работа N4 <b>"Основы PHP"' ?>
    <?php include("../template/header.php")?>
    <main class="index-main">
      <?php 
        define("VARIABLE", "X");
        function calculate($a, $b, $operation) {
          switch ($operation) {
            case "*":
              return $a * $b;
              break;
            case "/":
              return $a / $b;
              break;
            case "+":
              return $a + $b;
              break;
            case "-":
              return $a - $b;
              break;
          }
        }

        function get_reverse_operation($operation) {
          switch ($operation) {
            case "*":
              return "/";
              break;
            case "/":
              return "*";
              break;
            case "+":
              return "-";
              break;
            case "-":
              return "+";
              break;
          }
        }
        
        // Универсальная функция вычисления заданного уравнения (без валидации данных)
        function get_equestion_result($eq) {
          $eq = str_replace(" ", "", $eq);

          $answer = substr($eq, strpos($eq, "=") + 1, strlen($eq) - strpos($eq, "=") + 1);

          $operation = 
            strpos($eq, "+") ? $eq[strpos($eq, "+")] :
            (strpos($eq, "-") ? $eq[strpos($eq, "-")] : 
            (strpos($eq, "*") ? $eq[strpos($eq, "*")] :
            (strpos($eq, "/") ? $eq[strpos($eq, "/")] : "")));
          
          $a = substr($eq, 0, strpos($eq, $operation));
          $b = substr($eq, strpos($eq, $operation) + 1, strpos($eq, "=") - strpos($eq, $operation) - 1);
          
          if ($a === VARIABLE) {
            return calculate($answer, $b, get_reverse_operation($operation));
          } elseif ($b === VARIABLE) {
            if ($operation === "-" || $operation === "/") {
              return calculate($a, $answer, $operation);
            } else return calculate($answer, $a, get_reverse_operation($operation));
          } elseif ($answer === VARIABLE) {
            return calculate($a, $b, $operation);
          }
        }
        $equestions = array(
          "4 * X = 36",
          "X + 3 = 7",
          "27 - X = 17",
          "6/X = 2",
          "X/8=6",
          "22 * X = 220",
          "X * 7 = 49",
          "10 + X = 33",
          "X + 67 = 129",
          "4 * X = 36",
          "X * 9 = 56",
        );
        foreach ($equestions as $equestion) {
          echo "<div>" . $equestion . ",  X = " . get_equestion_result($equestion) . "</div>";
        }
      ?>
    </main>
    <?php include("../template/footer.php")?>
  </div>
</body>
</html>