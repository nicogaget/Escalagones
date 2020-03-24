<?php $pageTitle ='Grimper ensemble';
include "_header.php";
require "table.php";
require "functions.php"
?>
    <!-- Code pour la page "Grimper Ensemble"-->


    <h2>Grimper Ensemble</h2>

    <!-- Section contenant les évènements deja saisis -->
    <div class="titresEnsemble">
        <h3>Les évènements à venir</h3>
    </div>
    <article>
        <!-- Evènement 1-->
        <?php displayCardPage($events);?>

    </article>



    <!-- Section pour trouver Partenaires de grimpe -->

    <div class="titresEnsemble">
        <h3>Trouver un.e partenaire de grimpe!</h3>
    </div>
    <section>
        <?php displayClimbContact($climbTogether); ?>
    </section>
    <!-- Formulaire de contact -->
    <div class="titresEnsemble"><a id="formulaire">
            <h3>Formulaire de contact</h3>
        </a></div>

    <form class="sectionForm">


        <!-- Menu déroulant avec les différents choix -->

        <div class="form-group">
            <select class="custom-select" required>
                <option value="">Je souhaite proposer un événement</option>
                <option value="">Je souhaite proposer un lieu</option>
                <option value="">Je souhaite vous contacter</option>
            </select>
        </div>

        <!-- Input de l'email et du message de l'utilisateur -->

        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Saisissez votre email">
            <small id="emailHelp" class="form-text text-muted">On ne partagera jamais votre email avec quelqu'un
                d'autre.</small>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Saisissez votre message"></textarea>
        </div>
        <div class="form_buttons">
            <button type="reset" id="formButton" class="btn btn-light">Effacer</button>
            <button type="submit" id="formButton2" class="btn btn-success">Envoyer !</button>
        </div>

    </form>



<?php include "_footer.php"?>