<?php $pageTitle ='Grimper Ensemble';
$current_nav= 'together';
include "_header.php";


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
<?php
    require_once "../connec.php";
    $pdo = new PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM together";
    $st = $pdo->query($query);
    $together = $st->fetchAll(PDO::FETCH_ASSOC);
?>

    <section class="together">
        <article class="container-card">
            <?php
            foreach ( $together as $item) {
                include "card/togetherCard.php";
            }?>

        </article>

        <div class="introduce-card-header">
            <h3>Trouver un.e partenaire de grimpe!</h3>
        </div>

        <?php
        require_once "../connec.php";
        $pdo = new PDO(DSN, USER, PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM events";
        $st = $pdo->query($query);
        $events = $st->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <article class="container-card">
            <?php
            foreach ( $events as $item) {
                include "card/togetherCard.php";
            }?>
        </article>

    </section>


<?php include "_footer.php"?>