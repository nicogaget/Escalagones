<section class="card-section">
    <div class="col-md-12">
        <div class="card" style="width: 22rem;">
            <h3 class="card-header"><?= utf8_encode($item['name']) ?></h3>
            <img src="<?=utf8_encode($item['img'])?>" class="card-img-top g-card" alt="<?=utf8_encode($item['altImg'])?>">
            <div class="card-body">
                <p class="card-text"><?=utf8_encode($item['infos'])?></p>
            </div>
        </div>
    </div>
</section>
