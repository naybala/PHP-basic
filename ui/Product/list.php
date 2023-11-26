<?php
include 'function/productList.php';

?>
<h5>This is Product List Page</h5>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="index.php?page=product-create">
        <button class="btn btn-primary px-5 me-5" type="button">Create</button>
    </a>
</div>


<div class="container">
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th class=""></th>
        </tr>
        <tbody>
            <?php
foreach ($products as $key => $product) {
    ?>
            <tr>
                <td><?php echo ($product["name"]) ?></td>
                <td><?php echo ($product["price"]) ?></td>
                <td><?php echo ($product["description"]) ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-primary btn-sm">Delete</button>

                </td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
</div>