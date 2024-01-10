<?php
require_once __DIR__ . '/session.php';
require_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/head.php' ?>

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
                if ($_SESSION['email']) : ?>
                    <div class="alert alert-<?php if ($is_correct === false) : ?>warning<?php endif; ?> mt-5" role="alert">
                        <?php if ($is_correct === false) : ?>Inserisci un'email che contenga '@' e '.' per accedere!<?php endif; ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-primary mt-5">Submit</button>
            </form>
        </main>
        <!-- /Main -->

    </div>
</body>

</html>