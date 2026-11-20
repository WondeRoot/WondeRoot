<?php
session_start();
require  __DIR__ . '/../db/db.php';

$login = '';
$username = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($login === '' || $username === '' || $password === '' || $confirm === '') {
      $message = 'Veuillez remplir tous les champs';
    } elseif (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        $message = 'Veuillez entrer une adresse e-mail valide';
    } elseif (strlen($password) < 8) {
        $message = 'Le mot de passe doit contenir au moins 8 caractères';
    } elseif (!preg_match("#[0-9]+#", $password)) {
        $message = 'Le mot de passe doit contenir au moins un chiffre';
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $message = 'Le mot de passe doit contenir au moins une lettre majuscule';
    } elseif (!preg_match("#[a-z]+#", $password)) {
        $message = 'Le mot de passe doit contenir au moins une lettre minuscule';
    } elseif (!preg_match('/[^a-zA-Z0-9]/', $password)) {
        $message = 'Le mot de passe doit contenir au moins un caractère spécial';
    } elseif (preg_match('/\s/', $password)) {
        $message = 'Le mot de passe ne doit pas contenir d\'espaces';
    } elseif ($password !== $confirm) {
        $message = 'Les mots de passe ne correspondent pas';
    } elseif (findUser($login)) {
        $message = 'Cette adresse e-mail est déjà utilisée';
    } else {
        addUser($login, $username, $password, 'utilisateur');
        $_SESSION['login'] = $login;
        $_SESSION['username'] = $username;
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
  <link rel="icon" href="../src/icone.ico">
</head>

<body>
<?php require 'navbar.php'; ?>

  <main class="container">
  <form method="POST">
      <?php if (!empty($message)): ?>
          <p class="message-erreur"><?= htmlspecialchars($message)?></p>
      <?php endif; ?>
    <h1>Inscription</h1>
    <label for="iden">Adresse e-mail</label>
    <input type="email" id="iden" class="form-input" name="login" placeholder="prenom.nom@exemple.fr" required>
    <label for="pseudo">Nom d'utilisateur</label>
    <input type="text" id="pseudo" class="form-input" name="username" placeholder="Votre nom d'utilisateur" value="<?= htmlspecialchars($username) ?>" required>
    <label for="mdp">Mot de passe</label>
    <input type="password" id="mdp" class="form-input" name="password" placeholder="Votre mot de passe">
    <label for="confirm-mdp">Confirmer le mot de passe</label>
    <input type="password" id="confirm-mdp" class="form-input" name="confirm_password" placeholder="Confirmez votre mot de passe">
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