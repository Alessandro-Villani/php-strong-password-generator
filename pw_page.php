<?php
session_start();
if (isset($_SESSION['generated_password'])) $generated_password = $_SESSION['generated_password'];
else header('Location: ./index.php');

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
    <title>Generated Password</title>
</head>

<body class="p-5 container d-flex">
    <div class="card text-center m-auto p-5 d-flex flex-column align-items-center">
        <h3 class="mb-3">Password: <span><?= $generated_password ?></span> </h3>
        <a href="index.php" class="btn btn-danger">Indietro</a>
    </div>
</body>

</html>