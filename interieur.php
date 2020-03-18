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
        <div class="listing_block">

            <h3>Salles de bloc</h3>
            <ul>
                <?php
                foreach ($sallesBloc as $salle) {?>
                    <li class="li_menu-esc\"><a href=#mroc"><?php echo $salle; ?> </a></li>
                <?php } ?>
            </ul>

        </div>

        <div class="listing_voies">
            <h3>Salles de voies</h3>

            <ul>
                <?php
                foreach ($sallesVoies as $key => $value ) { ?>
                    <li class="li_menu-esc\"><a href=#mroc><?php echo $value[0]; ?> </a></li>
                <?php } ?>
            </ul>

        </div>
    </div>


    <article class="cardSalles">

        <div class="card" id="mroc" style="width: 27rem;">
            <div class="card-header">MROC LAENNEC, PART-DIEU, VILLEURBANNE
            </div>
            <div class="para_escalade">
                <p>Trois sites sur Lyon (Laennec, Part-Dieu et Villeurbanne), présentant chacune une superficie de plus de 1000m².
                </p>
                <p>Horaires : Du Lundi au Dimanche de 09h00 à 00h00
                </p>
            </div>
            <div class="card-body liens_web">
                <a href="https://laennec.mroc.fr/" target="_blank"> Site WEB de Laennec</a>
                <br>
                <a href="https://partdieu.mroc.fr/" target="_blank"> Site WEB de La Part-Dieu</a>
                <br>
                <a href="https://villeurbanne.mroc.fr/" target="_blank"> Site WEB de Villeurbanne</a>
            </div>
            <div class="lien_google_mroc">
                <p>Liens Google Maps : </p>
                <a href="https://g.page/mroclaennec?share" target="_blank">Laennec</a>
                <a href="https://g.page/mrocpartdieu?share" target="_blank">Part-Dieu</a>
                <a href="https://g.page/mrocvilleurbanne?share" target="_blank">Villeurbanne</a>
            </div>
        </div>

        <div class="card" id="verticalart" style="width: 27rem;">
            <div class="card-header">VERTICAL'ART
            </div>
            <div class="para_escalade">
                <p>A 5 mn de Lyon un bâtiment de 2000m² dont 1000 m² grimpables aux blocs variés et accessibles à tous.
                </p>
                <p>Horaires : Du Lundi au Dimanche de 11h00 à 23h00.</p>
            </div>
            <div class="card-body liens_web">
                <a href="https://lyon.vertical-art.fr/" target="_blank"> Site WEB de Vertical'Art</a>
            </div>
            <div class="lien_google">
                <p>Lien Google Maps : </p>
                <a href="https://g.page/Verticalartlyon?share" target="_blank">Vertical'Art</a>
            </div>
        </div>


        <div class="card" id="climbup" style="width: 27rem;">
            <div class="card-header">CLIMB UP LYON CONFLUENCE ET GERLAND
            </div>
            <div class="para_escalade">
                <p>Fun Climbing et activités ludiques pour les plus jeunes, une salle de voies avec des
                    murs de 22
                    mètres de long et des itinéraires du.de la débutant.e à l'expert.e !</p>
                <p>
                    Horaires : Du Lundi au Dimanche de 10h00 à 23h30
                </p>
            </div>
            <div class="card-body liens_web">
                <a href="https://lyon-confluence.climb-up.fr/" target=" _blank">Site WEB de Confluence </a>
                <br>
                <a href="https://lyon-gerland.climb-up.fr/" target=" _blank">Site WEB de Gerland </a>
            </div>
            <div class="lien_google ">
                <p>Liens Google Maps : </p>
                <a href="https://goo.gl/maps/YG4gTagScJnpMZVh9" target="_blank">Confluence</a>
                <a href="https://goo.gl/maps/5JSNYDZpNGxgfpAv7" target="_blank">Gerland</a>
            </div>
        </div>



        <div class="card " id="holdup" style="width: 27rem;">
            <div class="card-header">HOLD'UP ESCALADE
            </div>
            <div class="para_escalade">
                <p>Voies, blocs, une des plus grandes salles d'escalade de
                    France au cœur de Lyon. Grimpeur.se débutant.e ou confirmé.e, en cours ou en accès libre.</p>
                <p>
                    Horaires : Du Lundi au Dimanche de 11h00 à 22h00.
                </p>
            </div>
            <div class="card-body liens_web">
                <a href="http://holdup-escalade.fr/" target="_blank"> Site WEB Holdup </a>
            </div>
            <div class="lien_google">
                <p>Lien Google Maps : </p>
                <a href="https://g.page/holdupescalade?share" target="_blank">Hold'Up</a>
            </div>
        </div>


        <div class="card " id="arbresle" style="width: 27rem;">
            <div class="card-header">ESPACE ESCALADE A L'ARBRESLE
            </div>
            <div class="para_escalade">
                <p>Voies, blocs, grimpeur.se débutant.e ou confirmé.e, en cours ou en accès libre, enfant ou adulte, tous
                    pratiquent dans ce
                    même lieu de vie !</p>
                <p>
                    Horaires : Mardi & Jeudi 12:00-22:00 / Mercredi & Vendredi 14:00-22:00 /
                    Samedi 09:00-18:00
                </p>
            </div>
            <div class="card-body liens_web">
                <a href="http://www.espace-escalade.com " target="_blank"> Site Web d'escalade de l'Arbresle</a>
            </div>
            <div class="lien_google">
                <p>Lien Google Maps :</p>
                <a href="https://goo.gl/maps/Qx4HWtkeiowy7x1K8" target="_blank">Escalade l'Arbresle</a>
            </div>
        </div>

    </article>

<?php include "_footer.php"?>