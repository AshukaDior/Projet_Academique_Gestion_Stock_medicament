
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
?>