
<?php
require_once("db.php");
/*supprimer un utilisateur en BB*/
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "delete from pharmaciens where id=" . $_GET['id'];
    $removeUserReq = $bdd->prepare($sql);

    $result = $removeUserReq->execute();
    if (!empty($result)) {
        header('location:utilisateur.php');
    }
}
?>