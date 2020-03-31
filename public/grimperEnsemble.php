<?php $pageTitle ='Grimper Ensemble';
$current_nav= 'together';
include "_header.php";
require "table.php";

?>
    <!-- Code pour la page "Grimper Ensemble"-->

    <div class="in-banner">
        <h2><?= $pageTitle ?> </h2>
    </div>

    <section class="main-section">
        <div class="introduce">
            <div class="introduce-card">
                <h3 class="introduce-card-header">Les évènements à venir</h3>
            </div>
        </div>
    </section>
    <section class="together">

        <article class="container-card">
            <?php
            foreach ( $events as $item) {
                include "card/togetherCard.php";
            }?>

        </article>

        <div class="introduce-card-header">
            <h3>Trouver un.e partenaire de grimpe!</h3>
        </div>

        <article class="container-card">
            <?php
            foreach ( $climbTogether as $item) {
                include "card/togetherCard.php";
            }?>
        </article>

    </section>


<?php include "_footer.php"?>