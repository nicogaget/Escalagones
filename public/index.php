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
                <h3 class="intro-index"> Bienvenue sur le site de référence de l'escalade lyonnaise !</h3>

            </div>
        </div>

    </section>


    <section class= "container-card container-card-index">

        <?php foreach ($welcomeInfos as $item) {
            include "card/indexCard.php";
        }?>

    </section>



<?php include "_footer.php";