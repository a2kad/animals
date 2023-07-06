<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Type</th>
            <th scope="col">Race</th>
            <th scope="col">Sex</th>
            <th scope="col">Née</th>
            <th scope="col">Poids</th>
            <th scope="col">Tatué</th>
            <th scope="col">Chip</th>
            <th scope="col">Couleur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (Animals::getAllAnimals() as $row) {
        ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['type'] ?></td>
                <td><?= $row['name_race'] ?></td>
                <td><?= $row['sex'] ?></td>
                <td><?= $row['date_of_birth'] ?></td>
                <td><?= $row['weight'] ?></td>
                <td><?= $row['tatoo']==0 ? 'Oui' : 'Non' ?></td>
                <td><?= $row['chip']==0 ? 'Oui' : 'Non' ?></td>
                <td><?= $row['color'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "components/footer.php" ?>