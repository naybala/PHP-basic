<?php
if (isset($_POST['product-create-btn'])) {
    $errorName = null;
    $errorPrice = null;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $imageName = $_FILES['priceImage']['name'];
    $imageName = "image/".$imageName;

    $description = $_POST['description'];

    if($name == ""){
        $errorName = true;
       
    }else{
        $errorName = false;
        $name = $name;
    }

    if($price == ""){
        $errorPrice = true; 
    }else{
        $errorPrice = false;
        $price = $price;
    }
   

   if($errorName == false && $errorPrice == false){
    $duplicate = false;
    $selectDuplicate = mysqli_query($connection, "SELECT * FROM  products WHERE name = '" . $name . "'");
    $checkDuplicate = mysqli_num_rows($selectDuplicate);
    if ($checkDuplicate > 0) {
        $duplicate = true;
    } else {
        $insertProduct = mysqli_query($connection,
            "INSERT INTO products( name , price ,image,description)
                VALUES('" . $name . "' 
                , '" . $price . "' 
                , '" . $imageName . "' 
                ,'" . $description . "')");
        if ($insertProduct) {
            move_uploaded_file($_FILES['priceImage']['tmp_name'],'image');
            echo "<script>window.location.href='index.php?page=product-page'</script>";
        }
    }
   }
}

// server validation and ui validation.