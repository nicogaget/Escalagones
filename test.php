<?php
<?php foreach ($welcomeInfos as $key){?>
    <section class=cardHomePage>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $key[0] ?> </h5>
                <p class="card-text"><?php echo $key['Grimper en intérieur']?></p>
                <a href="interieur.php" class="btn btn-success cardButton">Voir plus</a>
            </div>
        </div>
    </section>
<?php } ?>