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
                                <a href="<?= $pages[page-link] ?>" class="btn btn-primary">Voir plus</a>
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





