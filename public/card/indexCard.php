<section class="card-section">
    <div class="col-md-12">
        <div class="card">
        <h3 class="card-header"><?= utf8_encode($item['name']) ?></h3>
            <div class="card-body">
                <p class="card-text"><?=  utf8_encode($item['infos']) ?></p>
                <a href="<?=  utf8_encode($item['pageLink'])?>" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>

</section>

