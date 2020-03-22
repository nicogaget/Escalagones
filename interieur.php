<?php
$pageTitle = 'Grimper en intérieur';
include "_header.php";
require "table.php";
require "functions.php"
?>
    <div class="in-banner">
        <h2><?= $pageTitle ?> </h2>
    </div>

    <section class="main-section">
        <section class="introduce">
            <div class="introduce-card">
                <h3 class="introduce-card-header">Grimper en bloc ou en voie, c'est possible sur Lyon et ses alentours ! Petite
                    revue des sites inmanquables.</h3>
                <div class="introduce-card-body">
                    <h4 class="introduce-card-title">Ici vous découvrirez les salles destinées uniquement au bloc, ainsi que les salles proposant des voies.</h4>
                </div>

                <div>
                    <h3>Salles de voies</h3>
                        <ul>
                            <?php foreach ($roomsVoies as $room) { ?>
                                <li><?php echo $room[name] ?> </a></li>
                            <?php } ?>
                        </ul>
                </div>
            </div>
        <article>
            <?php displayCardPage($roomsVoies) ?>
        </article>

<?php include "_footer.php" ?>