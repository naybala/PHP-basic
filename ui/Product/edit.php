<?php
include 'function/productEdit.php';
include 'function/productUpdate.php';
?>
<h5>This is Product Edit Page</h5>
<div class="container border p-5">
    <form action="" method='POST' enctype="multipart/form-data">
        <!-- id -->
        <input type="hidden" name="id" value="<?php echo @$editProduct['id'] ?>">
        <!-- id -->

        <!-- name -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                value="<?php echo @$editProduct['name'] ?>">
        </div>
        <!-- name -->

        <!-- image -->
        <div class="mb-3 shadow-lg p-5">
            <label for="exampleFormControlInput1" class="form-label">Product image</label>

            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="old_image"
                value="<?php echo (@$editProduct["image"]) ?>">

            <input type="file" class="form-control" id="exampleFormControlInput1" name="new_image">

            <br>
            <!-- For Show -->
            <div class="text-center">
                <img src="<?php echo (@$editProduct["image"]) ?>" class="img-thumbnail w-25">
            </div>
            <!-- For Show -->
        </div>
        <!-- image -->

        <!-- price -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price"
                value="<?php echo @$editProduct['price'] ?>">
        </div>
        <!-- price -->

        <!-- description -->
        <div class=" mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="description"
                value="<?php echo @$editProduct['description'] ?>"></input>
        </div>
        <!-- description -->

        <br><br>
        <div class="d-flex float-end gap-5">
            <a href="index.php?page=product-page">
                <button class="btn btn-primary px-5" type="button">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary px-5" name="product-update-btn">Update</button>
        </div>
    </form>
    <br>
</div>