<?php include "components/header.php" ?>
<?php include "components/navbar.php" ?>
<div class="container">
    <form method="POST" class="my-5">
        <div class="form-floating mb-3">
            <input type="text" class="form-control <?= $error_login['name_class'] ?? '' ?>" id="user_login" name="username">
            <label for="user_login"><?= $error_login['name'] ?? 'Identifiant :' ?></label>
            
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control <?= $error_login['pass_class'] ?? '' ?>" id="password" name="password">
            <label for="password"><?= $error_login['pass'] ?? 'Mot de passe :' ?></label>
        </div>
        <input type="submit" class="btn btn-warning" name="connect" value="Entrée">
        
        <a class="btn btn-danger" href="../index.php">Annuler</a>
    </form>
</div>
<?php include "components/footer.php" ?>