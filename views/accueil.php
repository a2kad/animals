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
              <p class="card-text">Nom : <?= $row['name'] ?></p>
              <p class="card-text">Date de naissance : <?= $row['date_of_birth'] ?></p>
              <p class="card-text">Poids : <?= $row['weight'] ?></p>

            </div>
          </div>
        </div>
      <?php } ?>
      
      
    </div>
  </div>
</div>

<?php include "components/footer.php" ?>