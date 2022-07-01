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

?>
<!doctype html>
<html>
    <head> 
        <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }

        input {
        margin-bottom: 20px;
        }

        </style>
    </head>
    
    <body>
        <h1>Silahkan Pilih Tiket</h1>
        <form method='post' action="/">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Buy</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Tiket 1</td>
            <td><a href="/tiket/1.php"><button type="button" class="btn btn-danger">Beli Tiket</button></a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tiket 2</td>
            <td><a href="/tiket/2.php"><button type="button" class="btn btn-danger">Beli Tiket</button></a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tiket 3</td>
            <td><a href="/tiket/3.php"><button type="button" class="btn btn-danger">Beli Tiket</button></a></td>
        </tr>
        </table>
    </body>
</html>