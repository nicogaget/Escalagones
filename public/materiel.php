<?php $pageTitle ='Matériel';
include "_header.php";
require "table.php";
?>

    <div class="in-banner">
        <h2><?= $pageTitle ?> </h2>
    </div>
    <section class="main-section">
        <div class="introduce">
            <div class="introduce-card">
                <h3 class="introduce-card-header">L'essentiel du matériel pour la pratique de l'escalade</h3>

            </div>
        </div>
    </section>


    <section class="container-card">
        <?php
        foreach ( $equipments as $item) {
        include "card/equipmentCard.php";
        }
        ?>


    </section>



    <!-- ajout d'un tableau par Amélie, si on le garde on enlève les titres avant pour ne pas déjà ranger le matos par catégorie, dans l'idée on présente tout le matos avec les card et on récapitule les besoin dans le tableau fait ici -->

      <h3 class="table-equipment">De quel matériel avez-vous besoin ?</h3>
      <div class="table-responsive">
          <table class="table table-hover table-dark">
              <thead>
              <tr class="orange">
                  <th scope="col">Matériel</th>
                  <th scope="col">Chaussons</th>
                  <th scope="col">Harnais</th>
                  <th scope="col">Assureur</th>
                  <th scope="col">Magnésie</th>
                  <th scope="col">Corde</th>
                  <th scope="col">Casque</th>
              </tr>
              </thead>
              <tbody>
              <tr class="blue">
                  <th scope="row">Bloc en intérieur</th>
                  <td>Indispensable</td>
                  <td>Non</td>
                  <td>Non</td>
                  <td>Si nécessaire</td>
                  <td>Non</td>
                  <td>Non</td>
              </tr>
              <tr class="blue2">
                  <th scope="row">Voie en intérieur</th>
                  <td>Indispensable</td>
                  <td>Indispensable</td>
                  <td>Indispensable</td>
                  <td>Si nécessaire</td>
                  <td>Si non prêté</td>
                  <td>Non</td>
              </tr>
              <tr class="blue">
                  <th scope="row">Bloc en extérieur</th>
                  <td>Indispensable</td>
                  <td>Non</td>
                  <td>Non</td>
                  <td>Si nécessaire</td>
                  <td>Non</td>
                  <td>Recommandé</td>
              </tr>
              <tr class="blue2">
                  <th scope="row">Voie en extérieur</th>
                  <td>Indispensable</td>
                  <td>Indispensable</td>
                  <td>Indispensable</td>
                  <td>Si nécessaire</td>
                  <td>Indispensable</td>
                  <td>Recommandé</td>
              </tr>
              </tbody>
          </table>


      </div>

  </section>

<?php include "_footer.php"?>