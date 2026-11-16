<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>WondeRoot</title>

    <link rel="stylesheet" href="../css/style.css">

  <link rel="icon" href="../src/icone.ico">
</head>

<body>
<?php require 'navbar.php'; ?>

      <section id="blocaccueil">
      <h1>Bienvenue sur WondeRoot !</h1>
      <q> Le plus merveilleux des sites pour introduire nos étudiants de 1ère année dans la meilleure formation de France à Vélizy </q>
    </section>

  <main class="container">
    <section id="blocimgaccueil">
      <img class="imgaccueil" src="../images/img1.png" alt="Aperçu jeu 1">
      <img class="imgaccueil" src="../images/img2.png" alt="Aperçu jeu 2">
      <img class="imgaccueil" src="../images/img3.png" alt="Aperçu jeu 3">
    </section>

    <p id="descaccueil">
      Principium autem unde latius se funditabat, navabatur opera naviter, 
      ut post hominum memoriam primus omnium aditus aperiretur ad terras, 
      unde periculose antea naves adpellere solebant. Pro his igitur cunctis et talibus, 
      cum omnium animi erigerentur in laudes, ipse perversitate ingenita conatibus laetis obstabat.
    </p>
  </main>

  <footer class="site-footer">
      <p class="footer-left">Amira Essaadaoui, Romain Hoogstoel, Marwan Esnoussi & Nicolas Boulard & Nelly Blettery | INF2A SAE | 2026/2027</p>
      <a class="site-logo" href="accueil.php">
        <img src="../images/uvsq-logo.png" alt="Logo UVSQ">
      </a>
  </footer>
</body>
</html>