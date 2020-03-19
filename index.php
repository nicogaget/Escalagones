<?php $pageTitle ='Bienvenue sur EscalaGones'?>
<?php include "_header.php"?>
<?php require "table.php"?>
    <div>
        <h2>Escalagones</h2>
        <p> Le site incourtounable des grimpeurs.ses en région Lyonnaise !</p>
    </div>
    <div >
        <h3>Bienvenue sur le site de référence de l'escalade lyonnaise !</h3>
        <p>Grimpeur.se novice ou as de la grimpe, seul.e ou accompagné.e, Escalagones est un véritable roadbook pour
            satisfaire toutes vos envies !
        </p>
        <p>Vous trouverez ici tout ce que la région lyonnaise peut vous offrir, que ce soit en intérieur (blocs ou voies) ou
            en extérieur. Vous pouvez également rechercher un.e partenaire de grimpe et vous tenir à jour des prochains
            événements. Escalagones vous offre des conseils avisés quant au choix de votre matériel. </p>
        <p>N'hésitez pas à nous contacter pour toute question, ou si vous souhaitez organiser une sortie !</p>
    </div>


    <section >
        <?php foreach ($welcomeInfos as $key => $value){?>
        <div >

            <div >
                <h5 ><?php echo $key ?> </h5>
                <p ><?php echo $value?></p>
            </div>
        </div>
    </section>
    <?php } ?>
<?php include "_footer.php" ?>
