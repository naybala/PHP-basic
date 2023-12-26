<?php
include 'function/productList.php';
include 'function/productDelete.php';

?>
<h5>This is Product List Page</h5>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="index.php?page=product-create">
        <button class="btn btn-primary px-5 me-5" type="button">Create</button>
    </a>
</div>

<br>
<div class="container">
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
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
                <td><img src="<?php echo ($product["image"]) ?>" class="img-thumbnail w-25"></td>
                <td><?php echo ($product["description"]) ?></td>
                <form method="POST">
                    <td>
                        <a href="index.php?page=product-edit&action=<?php echo $product['id'] ?>">
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <button type="submit" class="btn btn-primary btn-sm" name="product-delete-btn">Delete</button>
                    </td>
                </form>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
</div>