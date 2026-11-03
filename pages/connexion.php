<?php
session_start();
require  __DIR__ . '/../db/db.php';

//Page 5 du site correspondant au formulaire utile à la connexion pour pouvoir jouer aux jeux

$login = '';
$message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === '' || $password === '') {
        $message = 'Veuillez remplir tous les champs';
    } else {
        $user = findUser($login);

        if ($user && $user['password'] === md5($password)) {
            $_SESSION['login'] = $login;
            $_SESSION['role'] = $user['role'];
            header('Location: ' . getRole($user['role']));
            exit;
        } else {
            $message = 'Identifiant ou mot de passe incorrect';
        }
    }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion - WondeRoot</title>
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<?php require 'navbar.php'; ?>

  <main class="container">
  <form method="POST">
      <?php if (!empty($message)): ?>
        <p class="message-erreur"><?= htmlspecialchars($message)?></p>
      <?php endif; ?>
    <h1>Connexion</h1>
    <label for="iden">Identifiant</label>
    <input type="text" id="iden" class="form-input" name="login">
    <label for="mdp">Mot de passe</label>
    <input type="password" id="mdp" class="form-input" name="password">
    <input type="submit" class="btn-submit" value="Valider">
    <p>Pas encore de compte ? <a href="register.php">S'inscrire</a></p>
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
