<?php
$pageTitle ='Grimper en Extérieur';
$current_nav= 'exterieur';
include "_header.php";


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
<?php
    require_once "../connec.php";
    $pdo = new PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM spots";
    $st = $pdo->query($query);
    $spots = $st->fetchAll(PDO::FETCH_ASSOC);
?>
    <section class="container-card" >
        <?php foreach ($spots as $room) {
            if ($room["in_out"] == 1){
                foreach (array($room) as $item) {
                    include "card/outsideCard.php";
                }
            }
        }
        ?>


    </section>
<?php include "_footer.php"?>