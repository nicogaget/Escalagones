<?php
$pageTitle = 'Grimper en intérieur';
$current_nav= 'interieur';
include "_header.php";

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
<?php
    require_once "../connec.php";
    $pdo = new PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM spots";
    $st = $pdo->query($query);
    $spots = $st->fetchAll(PDO::FETCH_ASSOC);

?>


    <section class="inside">
        <div class="inside-type">
            <h3 style="color :#ff721c">Salles de voies</h3>
            <ul>
                <?php foreach ($spots as $item) :
                    if ($item['type']=='voie'): ?>
                        <li><a href="#<?= $item['id']?>" id target="_blank"><?php echo $item['name'] ?></a> </li>
                    <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>

        <div class="inside-type">
            <h3 style="color:#14b857">Salles de bloc</h3>
            <ul>
                <?php foreach ($spots as $item) :
                    if ($item['type']=='bloc'): ?>
                        <li><a href="<?= $item['webSite']?>" target="_blank"><?php echo $item['name'] ?></a> </li>
                    <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

    <section>
        <article class="container-card">

            <?php foreach ($spots as $room) {
                if ($room['type']=='voie'){
                    foreach (array($room) as $item) {
                        include "card/insideVoieCard.php";
                     }
                }
            }
            ?>


        </article>
    </section>

    <section>
        <article class="container-card">

            <?php foreach ($spots as $room) {
                if ($room['type']=='bloc'){
                    foreach (array($room) as $item) {
                        include "card/insideBlocCard.php";
                    }
                }
            }
            ?>

        </article>
    </section>
<?php include "_footer.php" ?>