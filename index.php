<?php

include 'partials/characters.php';
include 'partials/functions.php';

$pw_length = $_GET['pw-lenght'] ?? null;
$repeat = $_GET['repeat'] ?? 'yes';

if ($pw_length) {
    session_start();

    $_SESSION['generated_password'] = random_password($pw_length, $merged_characters, $repeat);

    header('Location: ./pw_page.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="styles/style.css" />
    <title>Password Generator</title>
</head>

<body class="p-5">
    <header class="container text-center mb-5">
        <h1>Stron Password Generator</h1>
        <h2>Genera una Password sicura</h2>
    </header>
    <main class="container">
        <form action="" method="GET" class="card d-flex p-5">
            <div class="row row-cols-2 mb-3">
                <div class="col mb-3">
                    <label for="pw-lenght">Lunghezza Password:</label>
                </div>
                <div class="col">
                    <input type="number" id="pw-lenght" name="pw-lenght" min="8" max="20" value="<?= $pw_length ?>">
                </div>
                <div class="col">
                    <p>Consenti la ripetizione di uno o più caratteri</p>
                </div>
                <div class="col d-flex flex-column align-items-start">
                    <div>
                        <input class="mb-2" type="radio" name="repeat" value="yes" id="yes" <?= $repeat === 'yes' ? 'checked' : '' ?>> <label for="yes">Si</label>
                    </div>
                    <div>
                        <input type="radio" name="repeat" value="no" id="no" <?= $repeat === 'no' ? 'checked' : '' ?>><label for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary">Invia</button>
                    <a href="index.php" class="btn btn-secondary">Reset</a>
                </div>
            </div>
        </form>
    </main>
</body>

</html>