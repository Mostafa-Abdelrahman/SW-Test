<div class="container">
        <h1>Add Product</h1>
        <form id="product_form" action="save-product.php" method="POST">
            <label for="sku">SKU:</label>
            <input type="text" id="sku" name="sku" required>
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>
            
            <label for="productType">Type:</label>
            <select id="productType" name="productType" onchange="showTypeFields()" required>
                <option value="">Select</option>
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            
            <div id="dvd-fields">
                <label for="size">Size (MB):</label>
                <input type="text" id="size" name="size">
            </div>
            
            <div id="book-fields">
                <label for="weight">Weight (Kg):</label>
                <input type="text" id="weight" name="weight">
            </div>
            
            <div id="furniture-fields">
                <label for="height">Height (CM):</label>
                <input type="text" id="height" name="height">
                <label for="width">Width (CM):</label>
                <input type="text" id="width" name="width">
                <label for="length">Length (CM):</label>
                <input type="text" id="length" name="length">
            </div>
            
            <button type="submit">Save</button>
            <a href="index.php">Cancel</a>
        </form>
    </div>

    <script>
    function showTypeFields() {
        var type = document.getElementById('productType').value;
        document.getElementById('dvd-fields').style.display = (type === 'DVD') ? 'block' : 'none';
        document.getElementById('book-fields').style.display = (type === 'Book') ? 'block' : 'none';
        document.getElementById('furniture-fields').style.display = (type === 'Furniture') ? 'block' : 'none';
    }
    </script>