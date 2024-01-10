<?php
require_once __DIR__ . '/session.php';
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
            <canvas id="confetti"></canvas>
            <h3>Benvenuto!</h3>
            <p>L'email con cui ti sei registrato è <?php echo $_SESSION['email'] ?></p>
            <button class="btn btn-danger"><a href="logout.php">Logout</a></button>
        </main>
        <!-- /Main -->

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
<script src="script.js"></script>

</html>