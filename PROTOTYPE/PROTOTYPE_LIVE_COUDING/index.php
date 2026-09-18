<?php
require_once "connexion.php";
$menu_items = $pdo->query("SELECT * FROM menu_item")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = container>
        <div class = header>
            <h1>Notre Menu</h1>
            <a href="ajouter.php" class = btn-ajouter>Ajouter un Plat</a>
        </div>
        <div class= cards>
            <?php foreach($menu_items as $item) { ?>
                <div class = card>
                    <h2><?php echo $item["name_item"]; ?></h2>
                    <p><?php echo $item["description"]; ?></p>
                    <p><?php echo $item["price"]; ?></p>
                </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>