<?php

$produit =  json_decode(file_get_contents("http://localhost/apiphp/API/produit/".$_GET['id']));

ob_start();
?>
<h1>Recette de <?= $produit->libelle ?> - <?= $produit->categorie?></h1>
<img src="<?= $produit->image?>" width="200px;" alt="recette"/>

<div>
   <?= $produit->description?>
</div>

<?php
$content = ob_get_clean();
require_once("template.php");
?>