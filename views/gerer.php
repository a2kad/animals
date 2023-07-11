<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<div class="container table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Type</th>
            <th scope="col">Race</th>
            
            <th scope="col"  class="text-end">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        foreach (Animals::getAllAnimals() as $row) {
        ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['type'] ?></td>
                <td><?= $row['name_race'] ?></td>
                
                <td class="text-end">
                    <form action="" method="get">
                        <a href="controller-info.php?info=<?= $row['id'] ?>"type="button" class="btn btn-primary btn-sm my-1" >+ info</a>
                        <a href="controller-modifier.php?modif=<?= $row['id'] ?>" type="submit" class="btn btn-secondary btn-sm my-1">Modifier</a>
                        <button type="button" class="btn btn-danger btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modal-<?= $row['id'] ?>">Supprimer</button>
                    </form>

                </td>
            </tr>

            <div class="modal fade" id="modal-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de supprimer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Voulez vous supprimer : <?= $row['name'] ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <a href="?del=<?= $row['id'] ?>" type="button" class="btn btn-danger">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>
    </tbody>
</table>
</div>
<?php include "components/footer.php" ?>