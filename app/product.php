<?php
//recuper les datas file_get_content => recuper data format json =>
// convertir data en tabl json_decode
$produits =  json_decode(file_get_contents("http://localhost/apiphp/API/produits"));
//print_r($produits);
ob_start();
?>


<table class="container-fluid table">
    <tr>
        <td> id </td>
        <td> nom </td>
        <td>description</td>
        <td>image</td>
        <td>categorie</td>
    </tr>
    <?php foreach ($produits as $produit):?>
        <tr> 
            <td> <?= $produit->id ?> </td>
            <td><a href="showproduct.php?id=<?= $produit->id ?>"><?= $produit->libelle ?> </a></td>
            <td> <?= $produit->description ?> </td>
            <td> <img src="<?= $produit->image ?>"/> </td>
            <td><a href="categorie.php?categorie=<?= $produit->categorie?>"><?= $produit->categorie?> </a> </td>
        </tr>
    
   
    <?php endforeach;
    ?>
    
</table>


<?php
$content = ob_get_clean();
require_once("template.php");
?>