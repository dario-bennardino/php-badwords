<?php
$paragrafo = $_POST['paragrafo'];
$parola = $_POST['parola'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Ricevo Form GET</title>
</head>

<body>
    <div class="container my-5">
        <p>Paragrafo: <?php echo $paragrafo ?>
        </p>
        <h4>Parola da censurare: <?php echo $parola ?>
        </h4>
    </div>
</body>

</html>