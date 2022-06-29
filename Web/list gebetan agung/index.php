<!-- make html to parse data from database.json -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ini Semua adalah...</title>
    </head>

    <body>
        <h1>List Gebetan Agung</h1>
        <ul></ul>
    </body>

    <script>
    // make script to parse json file in ul tag
    fetch('./database/database.json')
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                const li = document.createElement('li');
                li.innerHTML = `<a href="detail.php?id=${item.id}">${item.name}</a>`;
                document.querySelector('ul').appendChild(li);
            });
        });
    </script>

</html>