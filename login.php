<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        H1{
            text-align: center;
        }
    </style>
</head>
<body>
    <H1>
        Webboard KakKak
    </H1>
    <hr>
    <form action="verify.php" method="post">
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr><td colspan="2" style="background-color: #6cd2fe;"> เข้าสู่ระบบ <td></td></td></tr>
            <tr><td> Login </td><td><input type="text" name="login"></td></tr>
            <tr><td> Password </td><td><input type="password" name="pwd"></td></tr>
            <tr><td colspan="2" align="center"> <input type="submit" value="Login"> </td></td></td></tr> 
        </table>
    </form>

    <p align="center">
        ถ้ายังไม่ได้เป็นสมาชิก 
        <a href="register.php">
            กรุณาสมัครสมาชิก
        </a>
    </p>
</body>
</html>