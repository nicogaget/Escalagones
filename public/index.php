<?php $pageTitle ='EscalaGones';
$current_nav = 'index';
include "_header.php";


?>


    <div class="welcome-banner">
        <h1><?= $pageTitle ?> </h1>
    </div>

    <section class="main-index">
        <div class="introduce">
            <div class="introduce-card">
                <h3 class="intro-index"> Bienvenue sur le site de référence de l'escalade lyonnaise !</h3>

            </div>
        </div>

    </section>


    <section class= "container-card container-card-index">
        <?php
        require_once "../connec.php";
        $pdo = new PDO(DSN, USER, PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM welcomeInfos";
        $st = $pdo->query($query);
        $welcomeInfos = $st->fetchAll(PDO::FETCH_ASSOC);

        ?>

        <?php foreach ($welcomeInfos as $item) {
            include "card/indexCard.php";

        }?>

    </section>



<?php include "_footer.php";