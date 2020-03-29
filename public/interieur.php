<?php
$pageTitle = 'Grimper en intérieur';
include "_header.php";
require "table.php";

?>
    <div class="in-banner">
        <h2><?= $pageTitle ?> </h2>
    </div>

    <section class="main-section">
        <div class="introduce">
            <div class="introduce-card">
                <h3 class="introduce-card-header">Grimper en bloc ou en voie, c'est possible sur Lyon et ses alentours ! Petite
                    revue des sites inmanquables.</h3>
                <div class="introduce-card-body">
                    <h4 class="introduce-card-title">Ici vous découvrirez les salles destinées uniquement au bloc, ainsi que les salles proposant des voies.</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="inside">
        <div class="inside-type">
            <h3>Salles de voies</h3>
            <ul>
                <?php foreach ($roomsVoies as $item) { ?>
                    <li><a href="<?= $item['webSite']?>" target="_blank"><?php echo $item['name'] ?></a> </li>
                <?php } ?>
            </ul>
        </div>
        <div class="inside-type">
            <h3>Salles de bloc</h3>
            <ul>
                <?php foreach ($roomsBloc as $item) { ?>
                    <li><a href="<?= $item['webSite']?>" target="_blank"><?php echo $item['name'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
    <section>
        <article class="container-card">

            <?php foreach ($roomsVoies as $room) {
                foreach (array($room) as $item) {
                    include "card/insideCard.php";
                } ?>
            <?php }?>

        </article>
    </section>
<?php include "_footer.php" ?>