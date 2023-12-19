<?php
if (isset($_POST['product-update-btn'])) {
    $id = $_REQUEST['action'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if ($name == null || $price == null) {
        $errorInfo = true;
    } else {
        $errorInfo = false;
    }

    if ($errorInfo == false) {
        $selectDuplicate = mysqli_query($connection, "SELECT * FROM  products WHERE name = '" . $name . "'");
        $checkDuplicate = mysqli_num_rows($selectDuplicate);
        if ($checkDuplicate > 0) {

        } else {
            $insertProduct = mysqli_query($connection,
                "UPDATE products SET name='" . $name . "', price='" . $price . "',description='" . $description . "' WHERE id='" . $id . "'");
            if ($insertProduct) {
                echo "<script>window.location.href='index.php?page=product-page'</script>";
            }
        }
    }
}
