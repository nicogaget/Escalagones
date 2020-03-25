<?php $pageTitle ='Grimper Ensemble';
include "_header.php";
require "table.php";
require "functions.php"
?>
    <!-- Code pour la page "Grimper Ensemble"-->

    <div class="in-banner">
        <h2><?= $pageTitle ?> </h2>
    </div>

    <section class="main-section">
        <div class="introduce">
            <div class="introduce-card">
                <h3 class="introduce-card-header">Les évènements à venir</h3>
            </div>
        </div>
    </section>
    <section class="together">
        <article>
            <!-- Evènement 1-->
            <?php displayCardPage($events);?>

        </article>

        <div class="introduce-card-header">
            <h3>Trouver un.e partenaire de grimpe!</h3>
        </div>
        <section>
            <?php displayClimbContact($climbTogether); ?>
        </section>
        <!-- Formulaire de contact -->
        <div class="introduce-card-header">
            <a id="formulaire"><h3>Formulaire de contact</h3></a>
        </div>

        <!-- FORMULAIRE  -->
        <form class="sectionForm">
            <div class="form-id">
                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" placeholder="Votre nom">
                </div>
                <div class="form-group">
                    <input type="text" name="lastname"  class="form-control" placeholder="Votre Prénom">
                </div>
            </div>
            <div class="form-group">
                <select class="custom-select" name="formoption" required>
                    <option value="">Je souhaite proposer un événement</option>
                    <option value="">Je souhaite proposer un lieu</option>
                    <option value="">Je souhaite vous contacter</option>
                </select>
            </div>

            <!-- Input de l'email et du message de l'utilisateur -->

            <div class="form-group">
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Saisissez votre email">
                <small id="emailHelp" class="form-text text-warning">On ne partagera jamais votre email avec quelqu'un
                    d'autre.</small>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Saisissez votre message"></textarea>
            </div>
            <div class="form_buttons">
                <button type="reset" id="formButton" class="btn btn-light">Effacer</button>
                <button type="submit" id="formButton2" class="btn btn-success">Envoyer !</button>
            </div>

        </form>
    </section>


<?php include "_footer.php"?>