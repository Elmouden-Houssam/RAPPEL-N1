<?php
require_once "connexion.php";

$owners = $pdo->query("SELECT * FROM restaurant_owner")->fetchAll(PDO::FETCH_ASSOC);
$categories = $pdo->query("SELECT * FROM food_category")->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Ajouter un Plat</h1>
<form action="ajouter_action.php" method="post">
    <input type="text" name="name_item" placeholder="name" required><br><br>
    <input type="number" name="price" placeholder="price" required ><br><br>
    <textarea name="description" placeholder="description" required></textarea><br><br>

    <select name="id_owner" required>
        <?php foreach($owners as $owner) { ?>
            <option value="<?= $owner["id_owner"] ?>"><?= $owner["full_name"] ?></option>
            <?php } ?>
    </select><br><br>

    <select name="id_category" required>
        <?php foreach($categories as $category) { ?>
            <option value="<?= $category["id_category"] ?>"><?= $category["name_category"] ?></option>
            <?php } ?>
    </select><br><br>
    <button>Ajouter</button>
</form>
<a href="index.php">Retour</a>