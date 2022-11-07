<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>adminform</title>
</head>
<body>
    <div class="container">
        <form class="login-username" method="post" action="admin_act.php">
            <p class="login-text" style="font-size: 2rem; font-weight: 800; font-family:Georgia, 'Times New Roman', Times, serif">Strong Tower Admin</p>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required  >
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required >
            </div>
            <div class="input-group">
                <button name="submit" type="submit" class="btn">Log in</button>
            </div>
            <p class="login-reset-text" style="color:#fff; text-align:center;">Log Account Now</p>
        </form>
    </div>
</body>
</html>