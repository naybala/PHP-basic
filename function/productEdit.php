<?php
if (isset($_REQUEST['action'])) {
    $id = $_REQUEST['action'];
    $editProduct = mysqli_query($connection, "Select * From product where id= '" . $id . "'");
    $editProduct = mysqli_fetch_assoc($editProduct);
}
