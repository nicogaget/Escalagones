<?php
require "table.php";
var_dump($roomsVoies);
<?php foreach ($roomsVoies as $room) { ?>
    <div>
        <div><?php echo $room[name] ?></div>
        <div>
            <p><?php echo $room[infos] ?></p>
            <p>Horaires : <?php echo $room[openingTime] ?></p>
        </div>
        <div>
            <a href="<?php echo $room[webSite] ?> "
               target="_blank"><?php echo '<br>' . $room[webSiteName] ?></a>
        </div>
        <div>
            <img src="<?= $room[img] ?>" alt="Photo de <?= $room[imgAlt] ?>">
        </div>
        <div>
            <a href="#" title="permet de voir les mentions légales du site">plan</a>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.9383763230508!2d4.904393115565775!3d45.71227307910474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c321bdf6db77%3A0xc6605a7208416a22!2sVertical%E2%80%99Art%20Lyon!5e0!3m2!1sen!2sfr!4v1584577544456!5m2!1sen!2sfr"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
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
<div class="card " style="width: 27rem;">
                <div class="card-header">Mur de La Mulatière</div>
                <img class="card-img-top" src="images/ng_bloc.jpg" alt="Mur de La Mulatière" >
                <div class="card-body">

                    <p class="card-text">
                        Site de structure artificielle d'escalade gratuite et libre d'accès intéressant pour ses voies jusqu'au 5c .</p>
                    <div class="link-ext">
                        <a href="https://www.lamulatiere.fr/index.php/Loisirs?idpage=128&idmetacontenu=177" target="_blank"> Accès au site WEB </a>


                        <a  href="https://www.google.com/maps/place/Mur+de+La+Mulati%C3%A8re/@45.7256682,4.8061058,15z/data=!4m12!1m6!3m5!1s0x0:0xce7e8929450f0a6d!2sMur+de+La+Mulati%C3%A8re!8m2!3d45.7256682!4d4.8061058!3m4!1s0x0:0xce7e8929450f0a6d!8m2!3d45.7256682!4d4.8061058" target="_blank">
                            Voir sur la carte
                        </a>
                    </div>



                </div>
            </div>

            <div class="card"  style="width: 27rem;">
                <div class="card-header">Mur de la Croix Rousse</div>
                <img class="card-img-top" src="images/ng_bloc2.jpg" alt="Mur de la Croix Rousse" >
                <div class="card-body">
                    <p class="card-text">
                        Site de structure artificielle d'escalade gratuite et libre d'accès intéressant pour ses voies jusqu'au 5c et du 6a au 6c .
                    </p>
                    <div class="link-ext">
                        <a href="https://www.lamulatiere.fr/index.php/Loisirs?idpage=128&idmetacontenu=177" target="_blank"> Accès au site WEB </a>


                        <a  href="https://www.google.com/maps/search/mur+escalade+de+la+croix+rousse/@45.7779541,4.8197794,16z" target="_blank">
                            Voir sur la carte
                        </a>
                    </div>


                </div>
            </div>

            <div class="card" style="width: 27rem;">
                <div class="card-header">Salle d'escalade de Curis au Mont d'Or</div>
                <img class="card-img-ext" src="images/ng_bloc5.jpg" alt="Salle d'escalade de Curis au Mont d'Or" >
                <div class="card-body">
                    <p class="card-text">
                    Vingt six voies sont proposées entre 10 et 15m de haut. La FFME en assure l’entretien et la sécurité.</p>

                    <div class="link-ext">
                        <a href="https://www.curis.fr/site-descalade/" target="_blank"> Accès au site WEB </a>


                        <a  href="https://www.google.com/maps/place/Curris/@45.867891,4.8131168,15z/data=!4m5!3m4!1s0x0:0x777b76898a0f317e!8m2!3d45.867891!4d4.8131168" target="_blank">
                            Voir sur la carte
                        </a>
                    </div>
                 </div>
            </div>
