<?php
require_once ("./req.php");
//permettre de gerer les demande via 
//www.produit.fr/index.php?
/**
 * par 'demande' recu, url change
 * method get=> pour avoire url propre utiliser htaccess
 */
//www.produit.fr/produits
//www.produit.fr/produit/:categorie
///www.produit.fr/produit/:id


//recuperer info demande 
//

try{

    if (!empty($_GET['demande'])) {
        
        $url = explode("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));

        switch ($url[0]) {

            case 'produits':

                if (empty($url[1])) {

                    getProduits();

                } else{

                    getProduitByCategorie($url[1]);
                } 

                break;

            case 'produit':
                getProduitById($url[1]);

                break;

            default:
            throw new Exception(("la page n'existe pas. Vérifiez l'url"));
                break;
        }
        //print_r($url);
    }else {
        throw new Exception(("Problème de récupération de données"));
    }

} catch(Exception $e){

    $erruer = [
        "message" => $e->getMessage(),
        "code" =>$e->getCode()
    ];

    print_r($erruer);
}



?>