<?php
require '../Controller/Produit.php';
$n  = new Produit();
$produit = $n->upadteProduit();

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
                <h2>Update Produit</h2>
            </div>
            <form method="post" action="">

                <div class="form-group">
                    <label for="name">Nom Produit :</label>
                    <input type="text" value=" <?= $produit->product_name; ?>" name="product_name" id="product_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Prix : </label>
                    <input type="text" value="<?= $produit->price; ?>" name="prix" id="prix" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email">Category :</label>
                    <input type="text" value="<?= $produit->category; ?>" name="category" id="category" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update</button>
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