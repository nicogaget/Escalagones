<?php $pageTitle ='EscalaGones';
include "table.php";

include "_header.php";

?>


    <div class="welcome-banner">
        <h1><?= $pageTitle ?> </h1>
    </div>

    <section class="main-index">
        <div class="introduce">
            <div class="introduce-card">
                <h2 class="introduce-card-header"> Bienvenue sur le site de référence de l'escalade lyonnaise !</h2>

                <div class="introduce-card-body">
                    <p class="introduce-card-text">Grimpeur.se novice ou as de la grimpe, seul.e ou accompagné.e, Escalagones est un véritable roadbook pour
                        satisfaire toutes vos envies !<br>
                        Vous trouverez ici tout ce que la région lyonnaise peut vous offrir, que ce soit en intérieur (blocs ou voies) ou
                        en extérieur. Vous pouvez également rechercher un.e partenaire de grimpe et vous tenir à jour des prochains
                        événements. Escalagones vous offre des conseils avisés quant au choix de votre matériel.<br>
                        N'hésitez pas à nous contacter pour toute question, ou si vous souhaitez organiser une sortie !</p>

                </div>
            </div>
        </div>

    </section>


    <section class= "container-card">

        <?php foreach ($welcomeInfos as $item) {
            include "card/indexCard.php";
        }?>

    </section>



<?php include "_footer.php";