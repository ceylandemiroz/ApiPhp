<?php
//ne pas block image
//define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "https").
//"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));
function getProduits(){

    $pdo = getConnexion();
    $req = "SELECT p.id, p.libelle, p.description, p.image, c.libelle as categorie FROM produit p 
    inner join categorie c on p.categorie_id = c.id";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($produits);

}

function getProduitByCategorie($categorie){

    $pdo = getConnexion();
    $req = "SELECT p.id, p.libelle, p.description, p.image, c.libelle as categorie FROM produit p
    inner join categorie c on p.categorie_id = c.id WHERE c.libelle = :categorie";
    $stmt = $pdo->prepare($req);
    //var sql categorie associé param $cat
    $stmt->bindValue(":categorie", $categorie, PDO::PARAM_STR);
    $stmt->execute();
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($produits);

}

function getProduitById($id){

    $pdo = getConnexion();
    $req = "SELECT p.id, p.libelle, p.description, p.image, c.libelle as categorie FROM produit p 
    inner join categorie c on p.categorie_id = c.id WHERE p.id = :id";
    $stmt = $pdo->prepare($req);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($produit);

}

function getConnexion(){
    return new PDO("mysql:host=localhost;dbname=phpapi;charset=utf8","root","");
}

function sendJSON($infos){

    header("Acces-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    echo json_encode($infos, JSON_UNESCAPED_UNICODE);
}
?>