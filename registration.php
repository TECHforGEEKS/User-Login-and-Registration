<?php

    session_start();
    header('location:index.php');

    $con = mysqli_connect('localhost','root','osk2009#');

    mysqli_select_db($con,'login_register');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from users where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username Already Taken";
    }
    else{
        $reg = "insert into users(name,password) values('$name','$pass')";
        mysqli_query($con,$reg);
        echo "Registration Successful";
    }

?>