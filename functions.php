<?php
function displayIndexCard ($table)
    {?>
    <div class="container-card">
       <?php foreach ($table as $pages){?>
           <section class="card-section">
                    <div class="col-md-12">
                        <div class="card">
                            <h4 class="card-header"><?= $pages[page] ?></h4>
                            <div class="card-body">
                                <p class="card-text">'<?= $pages[infos] ?></p>
                                <a href="<?=$pages[page-link]?>" class="btn btn-primary">Voir plus</a>
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
                        <h4 class="card-header"><?= $pages[name] ?></h4>
                        <div class="card-body">
                            <div class="card-text"><?= $pages[infos] ?>
                                <p></p><?= $pages[openingTime] ?></p>
                                <a href="<?= $pages[page - link] ?>" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        <?php } ?>
    <?php }?>
    </div>
   <?php }?>


