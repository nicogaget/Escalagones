<?php $pageTitle ='EscalaGones';
 include "_header.php";
 require "table.php";
 require "functions.php";
?>


    <div class="welcome-banner">
        <h2><?= $pageTitle ?> </h2>
        <p>Le site incourtounable des grimpeurs.ses en région Lyonnaise !</p>
    </div>

    <section class="main-section">
        <section class="introduce">
                <div class="introduce-card">
                    <h3 class="introduce-card-header"> Bienvenue sur le site de référence de l'escalade lyonnaise !</h3>
                    <div class="introduce-card-body">
                        <h4 class="introduce-card-title">Grimpeur.se novice ou as de la grimpe, seul.e ou accompagné.e, Escalagones est un véritable roadbook pour
                            satisfaire toutes vos envies !</h4>
                        <p class="introduce-card-text">Vous trouverez ici tout ce que la région lyonnaise peut vous offrir, que ce soit en intérieur (blocs ou voies) ou
                            en extérieur. Vous pouvez également rechercher un.e partenaire de grimpe et vous tenir à jour des prochains
                            événements. Escalagones vous offre des conseils avisés quant au choix de votre matériel.<br>
                        N'hésitez pas à nous contacter pour toute question, ou si vous souhaitez organiser une sortie !</p>

                    </div>
                </div>

        </section>
            <?php displayIndexCard($welcomeInfos)?>
    </section>

<?php include "_footer.php" ?>
