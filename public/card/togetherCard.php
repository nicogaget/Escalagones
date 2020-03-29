<section class="card-section">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header"><?= $item['name'] ?></h3>
            <img src="<?= $item['img']?>" class="card-img-top" alt="Photo de <?= $item['name']?>" >
            <div class="card-body">
                <div class="card-text">
                    <p><?= $item['infos'] ?></p>
                    <a href="../contact.php" class="btn btn-primary">Prendre contact</a>
                </div>
            </div>
        </div>
    </div>

</section>