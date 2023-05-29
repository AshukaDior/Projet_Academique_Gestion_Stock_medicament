<?php
$bdd = new PDO(
    'mysql:host=127.0.0.1;dbname=easy_pharmar_bd',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION
    )
);
session_start();
ob_start();

if (isset($_POST['login'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        echo $email, $password;

        $user = $bdd->prepare("SELECT * FROM pharmaciens WHERE email = ? AND password = ? ");
        $user->execute(array($email, $password));

        $userexit = $user->rowcount();
        if ($userexit == 1) {
            $userinfo = $user->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['nom_complet'] = $userinfo['nom_complet'];
            $_SESSION['role'] = $userinfo['role'];
            header("Location:home.php?id=" . $_SESSION['id']);
            ob_end_flush();
        } else {
            echo '<br><div class="btn btn-danger center" role="alert">Utilisateur inconnu!</div>';
        }

    } else {
        echo '<br><div class="btn btn-danger center" role="alert">Veillez remplir tous les champs</div>';
    }
}
?>