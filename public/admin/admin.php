<?php
$pageTitle = "Administration";
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Trouvez les meilleurs sites d'escalade sur la région lyonnaise">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

    <title><?= $pageTitle ?></title>
</head>

<body>
<header>
    <nav class="navbar">
        <div class ="navbar_desktop">
            <ul class="nav">

                <li><a class="nav-link" href="/index.php">Retour Accueil</a></li>
                <li><a class="nav-link" href="/admin/mail.php">Messagerie</a></li>
                <li><a class="nav-link" href="/admin/lieux.php">lieux de grimpe</a></li>
                <li><a class="nav-link" href="/admin/events.php">evenement</a></li>
                <li><a class="nav-link" href="/admin/equipements.php">materiel</a></li>
                <li><a class="nav-link" href="/admin/contact.php">contact</a></li>


            </ul>
        </div>

        </ul>
    </nav>
</header>











<?php include "../_footer.php" ?>