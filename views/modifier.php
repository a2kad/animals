<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<h1 class="text-center m-5">Formulaire de modif</h1>
<?php if ($showForm) { ?>
    <div class="container">
        <?php
        if (isset($_GET['modif'])) {
            $id = $_GET['modif'];
            $result = Gerer::getAnimal($id);
            foreach ($result as $row) {
        ?>
                <form class="text-center" method="post" action="">
                    <fieldset class="m-5">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $row['id'] ?>">
                        <div class="mb-5">
                            <label for="name" class="form-label">Veuillez indiquer le nom de l'animal : <i class="error"><?= $error["name"] ?? "" ?></i> </label>
                            <input type="text" class="form-control mywidth m-auto text-center" name="name" id="name" value="<?= $_POST['name'] ?? $row['name']  ?>">
                        </div>
                        <div class="mb-5">
                            <label for="type" class="form-label">Quel type d'animal est-ce ? <i class="error"><?= $error["animaltype"] ?? "" ?></i></label>
                            <select class="form-select text-center mywidth m-auto" id="type" name="id_type">
                                <?php
                                foreach (Gerer::getType() as $row_type) { ?>
                                    <option <?= $row['id_type'] == $row_type['id'] ? 'selected' : '' ?> value="<?= $_POST['id_type'] ?? $row_type['id'] ?>"><?= $row_type['type'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="name_race" class="form-label">Quelle race est-ce ? <i><?= $error["animalracecat"] ?? "" ?></i></label>
                            <select class="form-select text-center mywidth m-auto" id="name_race" name="id_race">
                                <?php
                                foreach (Gerer::getRace($row['id_type']) as $row_race) { ?>
                                    <option <?= $row['id_race'] == $row_race['id'] ? 'selected' : '' ?> value="<?= $_POST['id_race'] ?? $row_race['id'] ?>"><?= $row_race['name_race'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="checkbox mb-5">
                            <p>Quel est le sexe de l'animal ? <i><?= $error["sex"] ?? "" ?></i></p>
                            <div class="form-check">
                                <input class="form-check-input mb-3" type="radio" name="sex" id="sex" <?= $row['id_sex'] == 1 ? 'checked' : '' ?> value="1">
                                <label class="form-check-label ms-3" for="sex">Mâle</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input mb-3" type="radio" name="sex" id="sex" <?= $row['id_sex'] == 2 ? 'checked' : '' ?> value="2">
                                <label class="form-check-label ms-3" for="sex">Femelle</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="nee" class="form-label">Veuillez indiquer la date d'arrivée de l'animal : <i><?= $error["animalarrival"] ?? "" ?></i></label>
                            <input type="date" class="form-control text-center date m-auto" id="nee" name="date_of_birth" value="<?= $row['date_of_birth'] ?>">
                        </div>
                        <div class="mb-5 d-flex justify-content-center flex-column">
                            <label for="weight" class="form-label d-flex m-auto">Veuillez indiquer le poids de l'animal : <i><?= $error["weight"] ?? "" ?></i></label>
                            <input type="number" step="0.01" class="form-control weight d-flex m-auto" id="weight" name="weight" value="<?= $row['weight'] ?>">
                        </div>
                        <div class="checkbox mb-5">
                            <p>L'animal est-il tatoué ? <i><?= $error["tatoo"] ?? "" ?></i></p>
                            <div class="form-check">
                                <input class="form-check-input mb-3" type="radio" name="tatoo" id="flexRadioDefault1" value="1" <?= $row['tatoo'] == 1 ? 'checked' : '' ?>>
                                <label class="form-check-label ms-3" for="flexRadioDefault1">
                                    Oui
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input mb-3" type="radio" name="tatoo" id="flexRadioDefault2" value="0" <?= $row['tatoo'] == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label ms-3" for="flexRadioDefault2">
                                    Non
                                </label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="color" class="form-label">Veuillez définir la couleur de l'animal : <i><?= $error["color"] ?? "" ?></i></label>
                            <select class="form-select" id="color" name="id_color">
                                <?php
                                foreach (Gerer::getColor() as $row_color) { ?>
                                    <option <?= $row['id_color'] == $row_color['id'] ? 'selected' : '' ?> value="<?= $row_color['id'] ?>"><?= $row_color['color'] ?></option>
                                <?php } ?>
                            </select>
                        </div>


                        <div class="checkbox mb-5">
                            <p>L'animal est-il pucé : <i><?= $error["chip"] ?? "" ?></i></p>
                            <div class="form-check">
                                <input class="form-check-input mb-3" type="radio" name="chip" id="flexRadioDefault1" value="1" <?= $row['chip'] == 1 ? "checked" : "" ?>>
                                <label class="form-check-label ms-3" for="flexRadioDefault1">
                                    Oui
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input mb-3" type="radio" name="chip" id="flexRadioDefault2" value="0" <?= $row['chip'] == 0 ? "checked" : "" ?>>
                                <label class="form-check-label ms-3" for="flexRadioDefault2">
                                    Non
                                </label>
                            </div>
                        </div>


                        <button value="submit" name="submit" type="submit" class="btn btn-primary" id="liveToastBtn">Modifier</button>

                    </fieldset>
                </form>
        <?php }
        }
        ?>
    </div>
<?php } else { ?>
    <div class="alert alert-success" role="alert">
        <p>Message : </p><?= $message ?>
    </div>

<?php }
include "components/footer.php" ?>