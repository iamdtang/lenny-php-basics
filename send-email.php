<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
</head>
<body>
  <p>
    Thank you for your message. We will send a confirmation to
    <?php echo $_POST['email'] ?>. Your message was:

    <br />
    <br />
    
    "<?php echo $_POST['message'] ?>"
  </p>
</body>
</html>