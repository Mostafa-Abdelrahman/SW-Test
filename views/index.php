
    <div class="container">
        <form method="POST" action="../public/delete.php">
            <header>
                <h1>Product List</h1>
                <div>
                    <a href="add-product.php">ADD</a>
                    <button id="delete-product-btn">MASS DELETE</button>
                </div>
            </header>
            <div class="product-list">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="product-item">
                            <input type="checkbox" name="product_ids[]" value="<?= $product->getId(); ?>" class="delete-checkbox">
                            <h2><?= htmlspecialchars($product->getSku()); ?></h2>
                            <p><?= htmlspecialchars($product->getName()); ?></p>
                            <p><?= htmlspecialchars($product->getPrice()); ?> $</p>
                            <p><?= htmlspecialchars($product->getSpecificAttribute()); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No products found.</p>
                <?php endif; ?>
            </div>
        </form>
    </div>