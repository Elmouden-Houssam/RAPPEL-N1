<?php
require_once "connexion.php";
$owners = $pdo->query("SELECT * FROM restaurant_owner")->fetchAll(PDO::FETCH_ASSOC);
$categories = $pdo->query("SELECT * FROM food_category")->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Ajouter un plat</h1>

<form method="POST" action="ajouter_action.php">

<input type="text" name="name_item" placeholder="Nom" required>
<input type="number" name="price" placeholder="Prix" required>
<textarea name="description" placeholder="Description" required></textarea>

<select name="id_owner" required>
<?php foreach ($owners as $owner) { ?>
<option value="<?= $owner["id_owner"] ?>"><?= $owner["full_name"] ?></option>
<?php } ?>
</select>

<select name="id_category" required>
<?php foreach ($categories as $category) { ?>
<option value="<?= $category["id_category"] ?>"><?= $category["name_category"] ?></option>
<?php } ?>
</select>

<button>Ajouter</button>
</form>

<a href="index.php">Retour</a>