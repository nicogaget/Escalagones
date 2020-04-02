<?php

if (!empty($_POST)) {
    require_once "../../connec.php";
    $pdo = new PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM contacts WHERE id=:id";
    $st = $pdo->prepare($query);

    $st->bindValue(":id", $_POST['id']);
    $st->execute();
    if ($st->rowCount() == 1) {
        header("Location: mail.php");
    } else {
        echo "ERROR";
    }
}

?>
