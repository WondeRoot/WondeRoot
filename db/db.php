<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function connect(): mysqli
{
    $connexion = mysqli_connect("localhost", "root", "rootroot", "wonderroot");
    /*Changez les paramètres en fonction de la configuration */
    mysqli_set_charset($connexion, "utf8");
    return $connexion;
}

function findUser(string $login){
    $connexion = connect();
    $sql = 'SELECT login, password, role FROM users WHERE login = ?';
    $req = mysqli_prepare($connexion, $sql);
    mysqli_stmt_bind_param($req, "s", $login);
    mysqli_stmt_execute($req);
    return mysqli_fetch_assoc(mysqli_stmt_get_result($req));
}

function addUser(string $login, string $password, string $role): bool{
    $connexion = connect();
    $sql = 'INSERT INTO users (login, password, role) VALUES (?, ?, ?)';
    $req = mysqli_prepare($connexion, $sql);
    $hash = md5($password);
    mysqli_stmt_bind_param($req, "sss", $login, $hash, $role);
    mysqli_stmt_execute($req);
    $ok = mysqli_stmt_affected_rows($req) == 1;
    mysqli_stmt_close($req);
    return $ok;
}

function getRole(string $role): string {

    switch ($role) {
        case 'adminweb':
            return 'adminweb.php';
        case 'adminsys':
            return 'adminsys.php';
        default:
            return 'profil.php';
    }
}