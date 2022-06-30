<?php
// error_reporting(0);
$id = $_GET['id'];
$data = file_get_contents('database/database.json');
$data = json_decode($data, true);
$data = array_filter($data, function ($item) use ($id) {
    return $item['id'] == $id;
});
$data = array_values($data)[0];



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $data['name'] ?></title>
    </head>

    <body>
        <!-- check if not found id -->
        <?php if (!isset($data)) : ?>
        <h1>Not Found</h1>
        <?php else : ?>
        <h1>Profile Gebetan Agung | <?= $data['name'] ?> </h1>
        <img src="<?= $data['profile'] ?>" alt="">
        <?php endif; ?>
        <ul></ul>
    </body>

    <script>
    </script>

</html>