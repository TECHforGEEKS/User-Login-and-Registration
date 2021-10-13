<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('locatin:index.html');
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <div class="container">
        <a class="float-right" href="logout.php">LOGOUT</a>
        <h1>Welcome <?php echo $_SESSION['username'];?></h1>
    </div>

</body>
</html>