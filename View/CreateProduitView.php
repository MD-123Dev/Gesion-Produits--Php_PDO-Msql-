<?php
require '../Controller/Produit.php';
$n  = new Produit();
 $n->createProduit();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

  <?php include 'layouts/navbar.html';?>



  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Create a Produit</h2>
      </div>
      <div class="card-body">
        <?php if (!empty($message)) : ?>

          <div class="alert alert-success">
            <?= $message; ?>
          </div>
        <?php endif; ?>

      </div>
      <form method="post" action="">

        <div class="form-group">
          <label for="name">Nom Produit :</label>
          <input type="text" name="product_name" id="product_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Prix : </label>
          <input type="text" name="prix" id="prix" class="form-control">
        </div>
        <div class="form-group">
          
           <label for="email">Category :</label>
            <select class="form-control" name="category" id="category">
              <option>TV</option>
              <option>Phone</option>
              <option>Pc</option>
            </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a Produit</button>
        </div>
        <div class="form-group">
          <input type="file" class="form-control-file border">
        </div>
      </form>
    </div>
  </div>


</body>

<footer class="page-footer font-small blue">


  <div class="footer-copyright text-center py-3">2020 copyright:

  </div>


</footer>


</html>