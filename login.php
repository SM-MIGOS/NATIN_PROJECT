<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
        text-align: center;
    }
    </style>
</head>
<body>

    <h2>Welcom <?php echo $_SESSION['Username']; ?></h2>
    Click here to <a href = "./assistent/backend/logout.php">Logout</a>
    
</body>
</html>