<?php
include 'function/productCreate.php';
?>
<h5>This is Product Create Page</h5>
<div class="alert alert-danger d-none mx-5" role="alert" id="validation-alert">
    Please Fill Product Name!
</div>
<br><br>
<div class="container border p-5">
    <form action="" method='POST'>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product-name" name="name">
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
            <button type="submit" class="btn btn-primary px-5 create-btn d-none" name="product-create-btn">
                Submit
            </button>
            <button type="button" class="btn btn-primary px-5 create-btn-real">
                Create
            </button>
        </div>
    </form>




    <br>

    <script>
    //querySelector

    var createBtn = document.querySelector(".create-btn");
    var createBtnReal = document.querySelector(".create-btn-real");
    var productName = document.querySelector("#product-name");
    var validationAlert = document.querySelector("#validation-alert");
    var createProductForm = document.querySelector('#create-product-form');

    createBtnReal.addEventListener("click", function() {
        if (productName.value == "") {
            validationAlert.classList.remove('d-none');
            setTimeout(() => {
                validationAlert.classList.add('d-none');
            }, 5000);
        } else {
            createBtn.click();
        }
    })
    </script>
</div>
