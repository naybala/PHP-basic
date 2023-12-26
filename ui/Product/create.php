<?php
include 'function/productCreate.php';
?>
<h5>This is Product Create Page</h5>
<?php
if(@$duplicate == true){
    ?>
<span class="text-danger validation-alert-duplicate">product name already exist!</span>

<?php
}
?>

<br><br>
<div class="container border p-5">
    <form action="" method='POST' enctype="multipart/form-data">
        <!-- name -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product-name" name="name" value="<?php echo @$name?>">
            <?php
if(@$errorName == true){
    ?>
            <span class="text-danger validation-alert-name">please fill product name first!</span>

            <?php
}
?>
        </div>
        <!-- name -->

        <!-- price -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="price"
                value="<?php echo @$price?>">
            <?php
if(@$errorPrice == true){
    ?>
            <span class="text-danger validation-alert-price">please fill product price
                first!</span>

            <?php
}
?>
        </div>
        <!-- price -->



        <!-- image -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product image</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="priceImage">
        </div>
        <!-- image -->


        <!-- description -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput1" name="description"></textarea>
        </div>
        <!-- description -->


        <br><br>
        <div class="d-flex float-end gap-5">
            <a href="index.php?page=product-page">
                <button class="btn btn-primary px-5" type="button">Cancel</button>
            </a>
            <button type="submit" class="btn btn-primary px-5 create-btn" name="product-create-btn">
                Submit
            </button>
        </div>
    </form>
    <br>

    <script>
    //querySelector
    var validationAlertName = document.querySelector(".validation-alert-name");
    var validationAlertPrice = document.querySelector(".validation-alert-price");
    var duplicate = document.querySelector(".validation-alert-duplicate");


    setTimeout(() => {
        validationAlertName.classList.add('d-none');
    }, 5000);

    setTimeout(() => {
        validationAlertPrice.classList.add('d-none');
    }, 5000);

    setTimeout(() => {
        duplicate.classList.add('d-none');
    }, 5000);
    </script>
</div>