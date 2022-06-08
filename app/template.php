<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar nav">
  <div class="container-fluide">
    <ul class="nav nav-tabs bg-light">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categories</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="categorie.php?categorie=cookie">Cookie</a></li>
          <li><a class="dropdown-item" href="categorie.php?categorie=salade">Salades</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Recettes</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <?= $content ?>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>