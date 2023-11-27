<?php
include 'function/productEdit.php';
include 'function/productUpdate.php';
?>
<h5>This is Product Edit Page</h5>
<div class="container border p-5">
    <form action="" method='POST'>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                value="<?php echo @$editProduct['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price"
                value="<?php echo @$editProduct['price'] ?>">
        </div>
        <div class=" mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="description"
                value="<?php echo @$editProduct['description'] ?>"></input>
        </div>
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