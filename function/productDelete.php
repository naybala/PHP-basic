<?php
if (isset($_POST['product-delete-btn'])) {
    $id = $_POST['id'];
    $deleteProduct = mysqli_query($connection, "DELETE FROM product WHERE id = '" . $id . "' ");
    if ($deleteProduct) {
        echo "<script>window.location.href='index.php?page=product-page'</script>";
    }
}
