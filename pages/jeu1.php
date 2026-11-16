<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: connexion.php');
    exit;
}

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jeu 1</title>

  <link rel="stylesheet" href="../css/style.css">

  <link rel="icon" href="../src/icone.ico">
</head>

<body>
<?php require 'navbar.php'; ?>

  <!-- contenu de la page -->
  <main class="container">
  <h1 class="page-title">Jeu 1</h1>
  <p class="game-description">Description et règles du jeu 1</p>

  <section class="game-area" aria-label="Zone interactive du jeu">
    <p>[emplacement du jeu]</p>

    <img src="" usemap="#image-map">

    <map name="image-map">
        <area target="" alt="BA1 - CARROS" title="BA1 - CARROS" href="jeu1.png" coords="584,63,505,352" shape="rect">
        <area target="" alt="BA2 - BOUCHER" title="BA2 - BOUCHER" href="jeu1.png" coords="712,582,481,352" shape="rect">
        <area target="" alt="BA3 - BASTIE" title="BA3 - BASTIE" href="jeu1.png" coords="1366,406,714,64" shape="rect">
        <area target="" alt="BA4 - ST EXUPERY" title="BA4 - ST EXUPERY" href="jeu1.png" coords="468,728,225,592" shape="rect">
        <area target="" alt="BA5 - MERMOZ" title="BA5 - MERMOZ" href="jeu1.png" coords="932,499,1265,664" shape="rect">
        <area target="" alt="BA6 - BLERIOT" title="BA6 - BLERIOT" href="jeu1.png" coords="820,678,104" shape="circle">
        <area target="" alt="BA7 - ANCINNE LOGE GARDIEN" title="BA7 - ANCINNE LOGE GARDIEN" href="jeu1.png" coords="1067,761,1302,832" shape="rect">
        <area target="" alt="BA8 - MODULAIRES" title="BA8 - MODULAIRES" href="jeu.png" coords="486,736,671,831" shape="rect">
    </map>

  <iframe>

  </iframe>

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
