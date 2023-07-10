<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<div class="container ">
    <?php


    if (isset($_GET['modif'])) {
        $id = $_GET['modif'];
        $result = Gerer::getAnimal($id);


        foreach ($result as $row) {
    ?>

            <form class="mx-5" method="post" action="">
                <input type="hidden" class="form-control" name="id" id="id" value="<?= $row['id'] ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?= $row['name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nee" class="form-label">Née</label>
                    <input type="date" class="form-control" id="nee" name="date_of_birth" value="<?= $row['date_of_birth'] ?>">
                </div>
                <div class="mb-3">
                    <label for="tatoo" class="form-label">Tatoué</label>
                    <select class="form-select" id="tatoo" name="tatoo">
                        <option <?= $row['tatoo'] == 0 ? 'selected' : '' ?> value="0">Non</option>
                        <option <?= $row['tatoo'] == 1 ? 'selected' : '' ?> value="1">Oui</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="chip" class="form-label">Chip</label>
                    <select class="form-select" id="chip" name="chip">
                        <option <?= $row['chip'] == 0 ? 'selected' : '' ?> value="0">Non</option>
                        <option <?= $row['chip'] == 1 ? 'selected' : '' ?> value="1">Oui</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Poids</label>
                    <input type="text" class="form-control" id="weight" name="weight" value="<?= $row['weight'] ?>">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Couleur</label>

                    <select class="form-select" id="color" name="id_color">
                        <?php
                        foreach (Gerer::getColor() as $row_color) { ?>
                            <option <?= $row['id_color'] == $row_color['id'] ? 'selected' : '' ?> value="<?= $row_color['id'] ?>"><?= $row_color['color'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="name_race" class="form-label">Race</label>
                    <select class="form-select" id="name_race" name="id_race">
                        <?php
                        foreach (Gerer::getRace($row['id_type']) as $row_race) { ?>
                            <option <?= $row['id_race'] == $row_race['id'] ? 'selected' : '' ?> value="<?= $row_race['id'] ?>"><?= $row_race['name_race'] ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="sex" class="form-label">Sex</label>

                    <select class="form-select" id="sex" name="sex">
                        <option <?= $row['id_sex'] == 1 ? 'selected' : '' ?> <?= $row['sex'] == 'male' ? 'selected' : '' ?> value="1">Male</option>
                        <option <?= $row['id_sex'] == 2 ? 'selected' : '' ?> <?= $row['sex'] == 'female' ? 'selected' : '' ?> value="2">Female</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" id="type" name="id_type">
                        <?php
                        foreach (Gerer::getType() as $row_type) { ?>
                            <option <?= $row['id_type'] == $row_type['id'] ? 'selected' : '' ?> value="<?= $row_type['id'] ?>"><?= $row_type['type'] ?></option>
                        <?php } ?>

                    </select>
                </div>

                <button value="submit" name="submit" type="button" class="btn btn-primary" id="liveToastBtn">Modifier</button>
                
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="..." class="rounded me-2" alt="...">
                        <strong class="me-auto">Bootstrap</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>
            </div>
            </form>

            

    <?php }
    }

    ?>
</div>
<?php include "components/footer.php" ?>