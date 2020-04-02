<section class="card-section">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header"><?= utf8_encode($item['name']) ?></h3>
            <img src="<?= utf8_encode($item['img'])?>" class="card-img-top" alt="Photo de <?= utf8_encode($item['name'])?>" >
            <div class="card-body">
                <div class="card-text">
                    <p><?= utf8_encode($item['infos']) ?></p>
                    <a href="../contact.php" class="btn-lg btn btn-primary">Prendre contact</a>
                </div>
            </div>
        </div>
    </div>

</section>