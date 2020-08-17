<?php

    require 'Config.php';

    if (isset($_POST["import"])) {
        
        $fileName = $_FILES["file"]["tmp_name"];
        
        if ($_FILES["file"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

                $sql = "INSERT INTO products(product_name, price,category) VALUES('". $column[1]."','". $column[2]. "','" . $column[3] . "')";
                $statement = $connection->prepare($sql);
                $statement->execute();

                
                
                if (! empty($statement)) {
                    $type = "success";
                    $message = "CSV Data Imported into the Database";
                } else {
                    $type = "error";
                    $message = "Problem in Importing CSV Data";
                }
            }
        }
    }
    header("Location: /test1");
?>
