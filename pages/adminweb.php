<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'adminweb') {
    header('Location: connexion.php');
    exit;
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin web</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../src/icone.ico">
</head>
<body>

<?php require 'navbar.php'; ?>

<main class="container">
    <h1>Espace administrateur web</h1>
    <p>Bienvenue <?= htmlspecialchars($_SESSION['login'])?></p>
</main>

</body>
</html>