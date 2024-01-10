<?php
$email = $_GET["email-input"];

require_once __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Import Bootstrap -->

    <!-- Import CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /Import CSS -->

    <!-- Titolo scheda -->
    <title>PHP NEWSLETTER</title>
    <!-- /Titolo scheda -->

</head>

<body>
    <div class="container mt-5">
        <!-- Header -->
        <header>
            <h1 class="text-center text-uppercase">PHP HOTELS</h1>
        </header>
        <!-- /Header -->

        <!-- Main -->
        <main>
            <form action="index.php" method="get" class="my-4">
                <label for="email-input" class="form-label">Inserisci la tua email</label>
                <input type="text" class="form-control" id="email-input" name="email-input" placeholder="email@dominio.com">
                <?php
                if ($is_correct) : ?>
                    <div class="alert alert-success mt-5" role="alert">
                        Puoi accedere!
                    </div>
                <?php endif; ?>

                <?php
                if ($is_correct === false) : ?>
                    <div class="alert alert-warning mt-5" role="alert">
                        Inserisci un'email che contenga '@' e '.' per accedere!
                    </div>
                <?php endif; ?>


                <button class="btn btn-primary mt-5">Submit</button>
            </form>
        </main>
        <!-- /Main -->

    </div>
</body>

</html>