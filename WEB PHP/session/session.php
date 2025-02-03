<?php
session_start();


// if ($_SESSION['login'] == true) {
//     header('Location:/session/member.php');
//     exit();
// }

// $error = "";
?>
<html>

<body>
    <form action="/session/login.php" method="post"></form>
    <label for="">Username
        <input type="text" name="username">
    </label>
    <br>
    <label for="">
        <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="login">
</body>

</html>