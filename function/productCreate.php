<?php
if (isset($_POST['product-create-btn'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if ($name == null || $price == null) {
        $errorInfo = true;
    } else {
        $errorInfo = false;
    }

    if ($errorInfo == false) {
        $selectDuplicate = mysqli_query($connection, "SELECT * FROM  product WHERE name = '" . $name . "'");
        $checkDuplicate = mysqli_num_rows($selectDuplicate);
        if ($checkDuplicate > 0) {

        } else {
            $insertProduct = mysqli_query($connection,
                "INSERT INTO product( name , price ,description) VALUES('" . $name . "' , '" . $price . "' ,'" . $description . "')");
            if ($insertProduct) {
                echo "<script>window.location.href='index.php?page=product-page'</script>";
            }
        }
    }
}
