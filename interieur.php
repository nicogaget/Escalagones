<?php include "_header.php"?>
<?php require "table.php"?>

    <h2 id="grimperensalle"> Grimper en intérieur </h2>

    <!--Nouvelle en-tête Amélie-->

    <div class="banniere_bloc"></div>
    <div class="texteInterieur">
    <h3 class="intro_para">Grimper en bloc ou en voie, c'est possible sur Lyon et ses alentours ! Petite revue
            des sites
            inmanquables.</h3>
    <p class="intro_para">Ici vous découvrirez les salles destinées uniquement au bloc, ainsi que les salles proposant
        des voies.</p>
    </div>

    <div class="liste_salles">

        <div >

            <h3>Salles de bloc</h3>
            <ul>
                <?php foreach ($roomsBloc as $room) {?>
                    <li class="li_menu-esc\"><a href=#mroc"><?php echo $room[name] ?> </a></li>
                <?php } ?>
            </ul>

        </div>

        <div class="listing_voies">
            <h3>Salles de voies</h3>

            <ul>
                <?php foreach ($roomsVoies as $room) {?>
                    <li class="li_menu-esc\"><a href=#mroc"><?php echo $room[name] ?> </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>


    <article class="cardSalles">

        <?php foreach ($roomsVoies as $room) {?>



        <div class="card"  style="width: 27rem;">

            <div class="card-header"><?php echo $room[name]?></div>

            <div class="para_escalade">

                <p><?php echo $room[infos] ?></p>
                <p>Horaires : <?php echo $room[openingTime]?></p>
            </div>
            <div class="card-body liens_web">
                <a href="<?php echo $room[webSite]?> " target="_blank"><?php  echo '<br>'.$room[webSiteName]?></a>
            </div>
            <div class="lien_google">

                <a href=<?php echo $room[googleMap]?> target="_blank">Google Map</a>
            </div>
        </div>
        <?php } ?>



    </article>

<?php include "_footer.php"?>