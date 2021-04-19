<?php
require '../Controller/PaginationProduit.php';

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

  <?php 
  include '../View/layouts/navbar.html';
  ?>
 
  <form class="form-horizontal" action="../Controller/Cvs.php" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
    <div class="input-row d-flex justify-content-end">
      <input type="file" name="file" id="file" accept=".csv">
      <button type="submit" id="submit" name="import" class="btn-warning">Import</button>
      <br />

    </div>

  </form>
  
  <div class="container">
    <div class="row m-5">
      <div class="col-md-10 col-sm-10">
        <div class="form-group">
          <div class="input-group">

            <input type="text" name="search_text" id="search_text" placeholder="Search by Product Name" class="form-control d-flex justify-content-center" />
          </div>
        </div>
      </div>
    </div>



    <a href="../View/CreateProduitView.php" class="btn btn-info btn-rounded float-right mb-2">Add new Product</a> 
    <table class="table" id="table">
      <thead class="black white-text">
        <tr>
          <th>#</th>
          <th>Nom Produit </th>
          <th>Prix : </th>
          <th>Category :</th>
          <th>Actions :</th>
        </tr>
      </thead>
      <tbody id="ablerow1">
        <tr >

          <?php foreach ($results as $prd) : ?>
           
            
              <td><?= $prd->id; ?></td>
              <td><?= $prd->product_name; ?></td>
              <td><?= $prd->price; ?></td>
              <td><?= $prd->category; ?></td>
           
            <td>
              <a href="../View/UpdateView.php?id=<?= $prd->id ?>" class="btn btn-info">Edit</a> 
              <a onclick="return confirm('Are you sure you want to delete?')" href="../Controller/DataProduit.php?id=<?= $prd->id ?>" class='btn btn-danger'>Delete</a>
            </td>

        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <ul class="pagination justify-content-center">
      <li class="page-item <?php if ($page <= 1) { echo 'disabled'; } ?>">
        <a class="page-link" href="<?php if ($page <= 1) {   echo '#'; } else {  echo "?page=" . $prev; } ?>">Previous</a>
      </li>

      <?php for ($p = 1; $p <= $total_pages; $p++) : ?>
        <li class="page-item <?php if ($page == $p) { echo 'active'; } ?>">
          <a class="page-link" href="index.php?page=<?= $p; ?>"> <?= $p; ?> </a>
        </li>
      <?php endfor; ?>

      <li class="page-item <?php if ($page >= $total_pages) {  echo 'disabled';} ?>">
        <a class="page-link" href="<?php if ($page >= $total_pages) { echo '#'; } else { echo "?page=" . $next; } ?>">Next</a>
      </li>
    </ul>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#search_text").keyup(function() {
        var search = $(this).val();
        $.ajax({
          url: "../Controller/search.php",
          method: "post",

          data: {
            query: search
          },
          success: function(response) {
           $('#ablerow1').html(response);
          }
          

        });
      });
    });
  </script>

</body>

<footer class="page-footer font-small blue">

  
  <div class="footer-copyright text-center py-3">2020 copyright:

  </div>
  

</footer>


</html>