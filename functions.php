<?php
function displayIndexCard ($table)
    {?>
    <div class="container-card">
       <?php foreach ($table as $pages){?>
           <section class="card-section">
                    <div class="col-md-12">
                        <div class="card">
                            <h3 class="card-header"><?= $pages[page] ?></h3>
                            <div class="card-body">
                                <p class="card-text">'<?= $pages[infos] ?></p>
                                <a href="<?=$pages[pageLink]?>" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>

           </section>
        <?php } ?>
        </div>
   <?php } ?>

<?php
function displayCardPage ($table)
{?>
    <div class="container-card">
        <?php foreach ($table as $room) {
        foreach (array($room) as $pages) { ?>
            <section class="card-section">
                <div class="col-md-12">
                    <div class="card">
                        <h3 class="card-header"><?= $pages[name] ?></h3>
                        <div class="card-body">
                            <div class="card-text"><?= $pages[infos] ?>
                                <p></p><?= $pages[openingTime] ?></p>
                                <a href="<?= $pages[webSite] ?>" class="btn btn-primary">Voir plus</a>
                                <a href="#" data-toggle="modal" data-target="#iframe"
                                   title="Situer sur une carte">Google Map</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div class="modal fade" id="iframe" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><?=$pages[name]?></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe src="<?=$pages[googleMap]?>"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php }?>
    </div>
   <?php }?>

<?php
function displayClimbContact($table)
{?>
    <div class="container-card">
        <?php foreach ($table as $room) {
            foreach (array($room) as $pages) { ?>
                <section class="card-section">
                    <div class="col-md-12">
                        <div class="card">
                            <h3 class="card-header"><?= $pages[name] ?></h3>
                            <img src="<?= $pages['img']?>" class="card-img-top" alt="Photo de <?= $pages['name']?>" >
                            <div class="card-body">
                                <div class="card-text">
                                    <p><?= $pages[infos] ?></p>
                                    <a href="<?= $pages['contact'] ?>" class="btn btn-primary">Prendre contact</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            <?php } ?>
        <?php }?>
    </div>
<?php }?>

<?php
function displayEquipment ($table)
{?>
    <div class="container-card">
        <?php foreach ($table as $pages){?>
            <section class="card-section">
                <div class="col-md-12">
                    <div class="card" style="width: 18rem;">
                        <h3 class="card-header"><?= $pages[name] ?></h3>
                        <img src="<?=$pages[img]?>" class="card-img-top g-card" alt="<?=$pages[altImg]?>">
                        <div class="card-body">
                            <p class="card-text"><?=$pages[infos]?></p>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
    </div>
<?php } ?>





