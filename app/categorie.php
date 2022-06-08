<?php
//recuper les datas file_get_content => recuper data format json =>
// convertir data en tabl json_decode
$produits =  json_decode(file_get_contents("http://localhost/apiphp/API/produits/".$_GET['categorie']));
//print_r($produits);
ob_start();
?>
<h1>Recette de <?= $_GET['categorie']; ?></h1>

<table class="table">
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>description</td>
        <td>image</td>
        <td>categorie</td>
    </tr>
    <?php foreach ($produits as $produit):?>
        <tr> 
            <td><?= $produit->id ?></td>
            <td><?= $produit->libelle ?></td>
            <td><?= $produit->description ?></td>
            <td><img src="<?= $produit->image ?>"/></td>
            <td><?= $produit->categorie?></td>
        </tr>
    
   
    <?php endforeach;
    ?>
    
</table>


<?php
$content = ob_get_clean();
require_once("template.php");
?>