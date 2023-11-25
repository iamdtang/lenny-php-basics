<?php
  $name = 'Lenny';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contact <?php echo $name; ?></h1>

  <form action="send-email.php" method="post">
    Email: <input type="email" name="email" />
    <br /> 
    Message: <textarea name="message" cols="30" rows="10"></textarea>

    <button type="submit">Send</button>
  </form>
</body>
</html>