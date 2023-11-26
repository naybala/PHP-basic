<?php
include 'function/productCreate.php';
?>
<h5>This is Product Create Page</h5>
<div class="container border p-5">
    <form action="" method='POST'>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput1" name="description"></textarea>
        </div>
        <br><br>
        <div class="d-flex float-end gap-5">
            <a href="index.php?page=product-page">
                <button class="btn btn-primary px-5" type="button">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary px-5" name="product-create-btn">Submit</button>
        </div>
    </form>
    <br>
</div>
