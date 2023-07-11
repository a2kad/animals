<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
      <?php
      foreach (Animals::getAllAnimals() as $row) {
      ?>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <h2 class="card-text">Nom : <?= $row['name'] ?></h2>
              <p class="card-text">Type : <?= $row['type'] ?></p>
              <p class="card-text">Race : <?= $row['name_race'] ?></p>
              <p class="card-text">Sex : <?= $row['sex'] ?></p>
              <p class="card-text">Date de naissance : <?= $row['date_of_birth'] ?></p>
              <p class="card-text">Poids : <?= $row['weight'] ?></p>
              <p class="card-text">Tatué : <?= $row['tatoo']==0 ? 'Oui' : 'Non' ?></p>
              <p class="card-text">Chip : <?= $row['chip']==0 ? 'Oui' : 'Non' ?></p>
              <p class="card-text">Couleur : <?= $row['color'] ?></p>
              
            </div>
          </div>
        </div>
      <?php } ?>
      
      
    </div>
  </div>
</div>

<?php include "components/footer.php" ?>