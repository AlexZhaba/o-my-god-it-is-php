<?php
  $expression = json_decode(file_get_contents('php://input'), true)['expression'];
  // $data = file_get_contents("php://input");
  // var_dump($data);
  $answer = "";
  try {
    eval('$answer = ' . $expression . ";");
  } catch(ParseError $e) {
    $answer = "ERROR";
    http_response_code(400);
  }
  $response = array(
    "answer" => ""
  );
  $response["answer"] = $answer;
  
  echo json_encode($response);
?>