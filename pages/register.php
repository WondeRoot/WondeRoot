<?php
session_start();
require  __DIR__ . '/../db/db.php';

$login = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($login === '' || $password === '' || $confirm === '') {
        $message = 'Veuillez remplir tous les champs';
    } elseif ($password !== $confirm) {
        $message = 'Les mots de passe ne correspondent pas';
    } elseif (findUser($login)) {
        $message = 'Cet identifiant est déjà pris';
    } else {
        addUser($login, $password, 'utilisateur');
        $_SESSION['login'] = $login;
        $_SESSION['role'] = 'utilisateur';
        header('Location: ' . getRole('utilisateur'));
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - WondeRoot</title>
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<?php require 'navbar.php'; ?>

  <main class="container">
  <form method="POST">
      <?php if (!empty($message)): ?>
          <p class="message-erreur"><?= htmlspecialchars($message)?></p>
      <?php endif; ?>
    <h1>Inscription</h1>
    <label for="iden">Identifiant</label>
    <input type="text" id="iden" class="form-input" name="login">
    <label for="mdp">Mot de passe</label>
    <input type="password" id="mdp" class="form-input" name="password">
    <label for="confirm-mdp">Confirmer le mot de passe</label>
    <input type="password" id="confirm-mdp" class="form-input" name="confirm_password">
    <input type="submit" class="btn-submit" value="Valider">
    <p>Vous avez déjà un compte ? <a href="connexion.php">Se connecter</a></p>
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
