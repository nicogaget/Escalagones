<?php
$pageTitle ='Grimper en Extérieur';
include "_header.php";
require "table.php";
require "functions.php";
?>
 
    <section >
        <h2>Grimper en Extérieur</h2>
        <div class="texteExterieur">
            <h3 class="intro_para">Vous préférez grimper en extérieur ? <br/>
                </h3>
            <p class="intro_para">Notre région nous offre une multitude de sites de grimpe en pleine nature !</p>
        </div>

        <article class="cardSalles">

            <?php displayCardPage($outsideRooms) ?>

        </article>
    </section>

<?php include "_footer.php"?>