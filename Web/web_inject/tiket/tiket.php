<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    // header('Location: index.php');
}

// // tiket
// if(isset($_POST['but_tiket'])){
//     header('Location: tiket.php/2');
// }
?>
<!doctype html>
<html>
    <head> 
    </head>
    
    <body>
        <h1>Ini Tiket Anda
        <form method='post' action="/">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        </h1>
        <img src="/beli_tiket.jpg" width="280" height="125" flag="tecartfestival22{flag}" />
        <!-- <form method='post' action="">
            <input type="submit" value="Beli Tiket" name="but_tiket">
        </form> -->
        <a href="/tiket.php/2"><button type="button" class="btn btn-danger">Beli Tiket</button></a>
    </body>
</html>