<?php
if (isset($_POST['product-create-btn'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $selectDuplicate = mysqli_query($connection, "SELECT * FROM  products WHERE name = '" . $name . "'");
    $checkDuplicate = mysqli_num_rows($selectDuplicate);
    if ($checkDuplicate > 0) {

    } else {
        $insertProduct = mysqli_query($connection,
            "INSERT INTO products( name , price ,description)
                VALUES('" . $name . "' , '" . $price . "' ,'" . $description . "')");
        if ($insertProduct) {
            echo "<script>window.location.href='index.php?page=product-page'</script>";
        }
    }

    // if ($name == null || $price == null) {
    //     $errorInfo = true;
    // } else {
    //     $errorInfo = false;
    // }

    // if ($errorInfo == false) {

    // }
}

//Products                    Category
//id                           id
//name                         name
//price
//description
//category_id