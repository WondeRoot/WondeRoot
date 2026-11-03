<?php
session_start();

if (!isset($_SESSION['role'])) {
    header('location: connexion.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - WondeRoot</title>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../src/icone.ico">
</head>
<body>
<?php require 'navbar.php'; ?>

  <main class="container">
    <h1 class="page-title">Profil</h1>
    <form method="POST">
        <h2>Changer mon mot de passe</h2>
        <label for="ancien-mdp">Ancien mot de passe</label>
        <input type="password" id="ancien-mdp" class="form-input" name="old_password">
        <label for="nouveau-mdp">Nouveau mot de passe</label>
        <input type="password" id="nouveau-mdp" class="form-input" name="new_password">
        <label for="confirm-mdp">Confirmer le mot de passe</label>
        <input type="password" id="confirm-mdp" class="form-input" name="confirm_password">
        <input type="submit" class="btn-submit" value="Modifier le mot de passe">
    </form>

    <form method="POST">
        <h2>Désinscription</h2>
        <p>Votre demande sera envoyée à l'administrateur du site.</p>
        <input type="submit" class="btn-submit" value="Demander ma Désinscription">
    </form>

  </main>

  <footer class="site-footer">
      <p class="footer-left">Amira Essaadaoui, Romain Hoogstoel, Marwan Esnoussi, Nelly Blettery & Nicolas Boulard | INF2A SAE | 2026/2027</p>
      <a class="site-logo" href="accueil.php">
        <img src="../images/uvsq-logo.png" alt="Logo UVSQ">
      </a>
  </footer>
    
</body>
</html>
