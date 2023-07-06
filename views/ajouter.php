<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<div class="container w-50">
    <form class="text-center">
        <fieldset>
            <legend>Disabled fieldset example</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                    <option>Disabled select</option>
                </select>
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