<h1>Product List</h1>
<a href="add-product.php">ADD</a>
<form method="POST" action="delete.php">
<?php foreach ($products as $product): ?>
        <div>
            <input type="checkbox" class="delete-checkbox" name="delete[]" value="<?= $product->getId(); ?>">
            <p>SKU: <?= $product->getSku(); ?></p>
            <p>Name: <?= $product->getName(); ?></p>
            <p>Price: $<?= $product->getPrice(); ?></p>
            <p><?= $product->getSpecificAttribute(); ?></p>
        </div>
    <?php endforeach; ?>
    <button type="submit">MASS DELETE</button>
</form>
