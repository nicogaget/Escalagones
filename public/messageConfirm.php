<?php
$pageTitle= "Message envoyé!";
include "_header.php";
?>
<body class="confirm">
    <section class="container-card">
        <div class="card text-center">
            <div class="card-header">
                Message envoyé !
            </div>
            <div class="card-body">
                <h5 class="card-title">Merci <?= $_GET['lastName'] . " " . $_GET['name'] ?></h5>
                <p class="card-text">Votre message a bien été envoyé, nous vous recontacterons rapidement à cette adresse pour répondre à votre demande:<br><?= $_GET['email'] ?></p>
                <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
            </div>

        </div>
    </section>


<?php include "_footer.php"; ?>


