<section class="card-section">
    <div class="col-md-12">
        <div class="card">
            <h3 class="card-header"><?= utf8_encode($item['name']) ?></h3>
            <div class="card-body">
                <p class="card-text">'<?= utf8_encode($item['infos']) ?></p>
                <a href="<?= utf8_encode($item['webSite'])?>" target="_blank" class="btn-lg btn btn-success">Site internet</a>
                <a href="<?= utf8_encode($item['googleMap'])?>" target="_blank" class="btn-lg btn btn-primary">GoogleMap</a>

            </div>
        </div>
    </div>

</section>
