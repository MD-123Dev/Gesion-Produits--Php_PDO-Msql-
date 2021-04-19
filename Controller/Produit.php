<?php

 
    class Produit{

        function __construct()
        {
            
        }

        //**get all produit  */
        function getProduits()
        {
            require '../env/Config.php';


            $sql = 'SELECT * FROM products';
            $statement = $connection->prepare($sql);
            $statement->execute();
            $Produits = $statement->fetchAll(PDO::FETCH_OBJ);

            return $Produits;
        }
          //**insert produit  */
        function createProduit()
        {
            require '../env/Config.php';

            if (isset($_POST['product_name'])  && isset($_POST['prix']) && isset($_POST['category'])) {
                $product_name = $_POST['product_name']; 
                $prix = $_POST['prix'];
                $category = $_POST['category'];
                $sql = 'INSERT INTO products(product_name, price,category) VALUES(:product_name,:prix,:category)';
                $statement = $connection->prepare($sql);
                if ($statement->execute([':product_name' => $product_name, ':prix' => $prix, ':category' => $category])) { 
                    
                  header("Location: ../public/index.php"); 

                }
            
            }
        }

        //** delect produit from Bs */
        function delectProduit()
        {
            require '../env/Config.php';

            $id = $_GET['id'];
            $sql = 'DELETE FROM products WHERE id=:id';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':id' => $id])) { 
                header("Location: ../public/index.php"); //***return en page index
            }
        }


        //**update produit  */
        function upadteProduit()
        {
            require '../env/Config.php';

            $id = $_GET['id'];
           
            $sql = 'SELECT * FROM products WHERE id=:id';
            $statement = $connection->prepare($sql);
            $statement->execute([':id' => $id]);
            $person = $statement->fetch(PDO::FETCH_OBJ); 
           
           if (isset($_POST['product_name'])  && isset($_POST['prix']) && isset($_POST['category'])) { 
                $product_name = $_POST['product_name']; 
                $category = $_POST['category'];
                $prix = $_POST['prix'];

                $sql = 'UPDATE products SET product_name=:product_name, price=:prix, category=:category WHERE id=:id '; 
                $statement = $connection->prepare($sql);
                if ($statement->execute([':product_name' => $product_name, ':prix' => $prix, ':category' => $category, ':id' => $id])) {
                header("Location: ../public/index.php");
                }
            }
           return $person;
        }

        

    }

?>