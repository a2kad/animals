<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<div class="container ">
    <?php
    if (isset($_GET['info'])) {
        $id = $_GET['info'];
        $result_info = Gerer::getAnimal($id);
        foreach ($result_info as $row_info) {
    ?>
<h1><?= $row_info['name'] ?></h1>
<p><b>Type d'animal : </b><?= $row_info['type'] ?></p>
                            <p><b>Race d'animal : </b><?= $row_info['name_race'] ?></p>
                            <p><b>Sex d'animal : </b><?= $row_info['sex'] ?></p>
                            <p><b>Date d'arrivée de l'animal : </b><?= $row_info['date_of_birth'] ?></p>
                            <p><b>poids de l'animal : </b><?= $row_info['weight'] ?></p>
                            <p><b>L'animal est-il tatoué : </b><?= $row_info['tatoo'] == 1 ? 'Oui' : 'Non' ?></p>
                            <p><b>L'animal est-il pucé : </b><?= $row_info['chip'] == 1 ? 'Oui' : 'Non' ?></p>
                            <p><b>Couleur de l'animal : </b><?= $row_info['color'] ?></p>
<?php }
    }
    ?>
</div>
<?php include "components/footer.php" ?>