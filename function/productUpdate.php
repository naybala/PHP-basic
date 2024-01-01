<?php
if (isset($_POST['product-update-btn'])) {
    $oldImage = null;
    if($_FILES['new_image']['name'] != "") {
        $imageName = $_FILES['new_image']['name']; //image-1 1.png
        $folder = "./image/" . $imageName;
        $imageName = "image/" . $imageName; // image/image-1 1.png
        $oldImage =  $_POST['old_image'];
        }else{
       $imageName = $_POST['old_image'];
    }

    $id = $_POST['id'];
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
        if ($checkDuplicate > 1) {

        } else {
            $updateProduct = mysqli_query($connection,
                "UPDATE products SET 
                name='" . $name . "',
                price='" . $price . "',
                image='" . $imageName . "',
                description='" . $description . "' 
                WHERE id='" . $id . "'");
            if ($updateProduct) {
                if($_FILES['new_image']['name'] != "") {
                    unlink("./".$oldImage);
                    move_uploaded_file($_FILES['new_image']['tmp_name'], $folder);
                }
                echo "<script>window.location.href='index.php?page=product-page'</script>";
            }
        }
    }
}