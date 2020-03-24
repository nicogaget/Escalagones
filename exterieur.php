<?php
$pageTitle ='Grimper en Extérieur';
include "_header.php";
require "table.php";
require "functions.php";
?>
    <div class="in-banner">
        <h2><?= $pageTitle ?> </h2>
    </div>

    <section class="main-section">
        <div class="introduce">
            <div class="introduce-card">
                <h3 class="introduce-card-header">Vous préférez grimper en extérieur ?</h3>
                <div class="introduce-card-body">
                    <h4 class="introduce-card-title">Notre région nous offre une multitude de sites de grimpe en pleine nature !</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="outside">
        <article class="cardSalles">

            <?php displayCardPage($outsideRooms) ?>

        </article>

    </section>
<?php include "_footer.php"?>