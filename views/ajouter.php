<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<div class="container w-50">
    <form class="text-center">
        <fieldset class="m-5">
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Veuillez indiquer le nom de l'animal :</label>
                <input type="text" id="disabledTextInput" class="form-control">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Quel type d'animal est-ce ?</label>
                <select id="disabledSelect" class="form-select text-center">
                    <option>Type d'animal</option>
                    <option>Chat</option>
                    <option>Chien</option>
                </select>
            </div>

            <div class="mb-3" id="chat">
                <label for="disabledSelect" class="form-label">Quelle race de chat est-ce ?</label>
                <select id="disabledSelect" class="form-select text-center">
                    <option>Race de chat</option>
                    <option>Persan</option>
                    <option>Angora</option>
                    <option>Européen</option>
                    <option>Autres</option>
                </select>
            </div>
            <div class="mb-3" id="chien">
                <label for="disabledSelect" class="form-label">Quelle race de chien est-ce ?</label>
                <select id="disabledSelect" class="form-select text-center">
                    <option>Race de chien</option>
                    <option>Golden</option>
                    <option>Bulldog</option>
                    <option>Chiwawa</option>
                    <option>Autres</option>
                </select>
            </div>
            <div class="checkbox">
                <p>Quel est le sexe de l'animal ?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Mâle
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femelle
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Veuillez indiquer la date d'arrivée de l'animal :</label>
                <input type="date" id="disabledTextInput" class="form-control text-center">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Veuillez indiquer le poids de l'animal :</label>
                <input type="number" id="disabledTextInput" class="form-control text-center">
            </div>
            <div class="checkbox">
                <p>L'animal est-il tatoué ?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="tatoo" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Oui
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="tatoo" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Non
                    </label>
                </div>
            </div>
            <div class="checkbox">
                <p>Veuillez définir la couleur de l'animal :</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Noir
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Blanc
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Mix
                    </label>
                </div>
            </div>
            <div class="checkbox">
                <p>L'animal est-il pucé :</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="chip" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Oui
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="chip" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Non
                    </label>
                </div>
            </div>
            <div class="mb-3 justify-content-center">
                <div class="form-check w-25 m-auto">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        Can't check this
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
        </fieldset>
    </form>
</div>
<?php include "components/footer.php" ?>