<?php
$role = $_SESSION['role'] ?? '';
?>

<header class="site-header">
    <nav class="site-nav" aria-label="Navigation principale">
        <a class="btn" href="accueil.php">Accueil</a>
        <a class="btn" href="jeu1.php">Jeu 1</a>
        <a class="btn" href="jeu2.php">Jeu 2</a>
        <a class="btn" href="jeu3.php">Jeu 3</a>

        <div class="nav-droite">
            <?php if ($role == '') : ?>
                <a class="btn" href="connexion.php">Connexion</a>
                <a class="btn" href="register.php">Inscription</a>
            <?php else : ?>
                <?php if ($role == 'adminweb'): ?>
                    <a class="btn" href="adminweb.php">Adminweb</a>
                <?php endif; ?>
                <?php if ($role == 'adminsys'): ?>
                    <a class="btn" href="adminsys.php">Admin système</a>
                <?php endif; ?>
                <a class="btn" href="profil.php">Profil</a>
                <a class="btn" href="../db/deconnexion.php">Déconnexion</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
