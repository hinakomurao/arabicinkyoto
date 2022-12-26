<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<php>
  $to = 'kinakomochi.0311.2525@gmail.com';//送信先の指定
  $subject = 'test'; //件名
  $message = 'Hello World!'; //本文
  $additional_headers = array('From' => "a1@test.com', Replay-To' => a1@test.com); //FromとReplay-Toの指定

  mail ($to ,$subject ,$message ,$additional_headers);
</php>
</body>
</html>