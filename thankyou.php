<?php
require_once __DIR__ . '/session.php';
echo "La tua email è {$_SESSION['email']}";
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
            <h3>Benvenuto!</h3>
            <p>L'email con cui ti sei registrato è <?php echo $_SESSION['email'] ?></p>
        </main>
        <!-- /Main -->

    </div>
</body>

</html>