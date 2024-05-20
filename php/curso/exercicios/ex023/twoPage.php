<?php
    $emailIncriptografado = $_GET['email'];
    $email = base64_decode($emailIncriptografado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Email: <?php echo $email ?></p>
</body>
</html>