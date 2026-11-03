<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jeu 3</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="icone.ico">
  <link rel="icon" href="../src/icone.ico">
</head>
<body>
  <?php require 'navbar.php'; ?>

  <!-- contenu de la page -->
  <main class="container">
  <h1 class="page-title">Jeu 3</h1>
  <p class="game-description">Description et règles du jeu 3</p>

  <section class="game-area" aria-label="Zone interactive du jeu">
    <p>[emplacement du jeu]</p>
  </section>
  </main>

  <footer class="site-footer">
      <p class="footer-left">Amira Essaadaoui, Romain Hoogstoel, Marwan Esnoussi, Nelly Blettery & Nicolas Boulard | INF2A SAE | 2026/2027</p>
      <a class="site-logo" href="accueil.php">
        <img src="../images/uvsq-logo.png" alt="Logo UVSQ">
      </a>
  </footer>
</body>
</html>
