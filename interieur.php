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
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                   title="permet de voir les mentions légales du site">plan</a>
            </div>


                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Mentions légales</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.9383763230508!2d4.904393115565775!3d45.71227307910474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c321bdf6db77%3A0xc6605a7208416a22!2sVertical%E2%80%99Art%20Lyon!5e0!3m2!1sen!2sfr!4v1584577544456!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>



    </article>

<?php include "_footer.php"?>