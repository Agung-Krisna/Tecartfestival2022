<?php

session_start();

$_SESSION["saldo"] = 1000;
$angka = random_int(1, 9999);
$saldo = $_SESSION["saldo"];

if (isset($_POST["taruhan"])) {
    $bet = $_POST["bet"];
    $bet = intval($bet);
    $saldo = intval($saldo);
    if ($bet > $saldo) {
        echo "<br>Saldo tidak mencukupi<br>";
    } else {
        $saldo = $saldo - $bet;
        $_SESSION["saldo"] = $saldo;
        echo "<br>Saldo anda sekarang $saldo<br>";

        if ($_POST["angka"] == $angka) {
            $saldo = $saldo + $bet * 10;
            $_SESSION["saldo"] = $saldo;
            echo "<br>Anda menang $bet x 10<br>";
        } else {
            echo "<br>Anda kalah $bet<br>";
        }
    }
}

?>

<!-- html template boostrap -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Taruhan Online</h1>
                    <hr>
                    <!-- make card for information -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi</h5>
                            <p class="card-text">
                                Web haram taruhan online, Tebak angka berhadiah! Tebak angka dari 1 - 9999, Jika benar
                                akan mendapatkan 10 Kali lipat dari Bet yang kamu input
                                Raih Uang sebanyak Rp. 2.000.000.000 atau lebih untuk mendapatkan flag
                            <ul>
                                <li class="font-weight-bold">Saldo awal: <?= $_SESSION["saldo"] ?> </li>
                                <?php
                            if ($_SESSION["saldo"] >= 2000000000) {
                                echo "<br>nih flagnya : tecartfest2022{judi_itu_haram_ya_gais}<br>";
                            }

                            ?>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="angka">Masukkan Angka</label>
                            <input type="number" class="form-control" id="angka" name="angka"
                                placeholder="Masukkan Angka Acak">
                        </div>

                        <div class="form-group">
                            <label for="bet">Jumlah Bet</label>
                            <input type="number" class="form-control" id="bet" name="bet"
                                placeholder="Masukkan Jumlah Bet">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="taruhan" class="btn btn-primary">Taruhkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>