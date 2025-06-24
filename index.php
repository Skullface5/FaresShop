<?php include 'includes/header.php'; ?>
    <section class="hero">
        <h2>Welcome to TechShop</h2>
        <p>Your one-stop shop for all tech gadgets and accessories</p>
        <a href="products.php" class="btn">Shop Now</a>
    </section>
    
    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="products-grid">
            <!-- Sample featured products -->
            <div class="product-card">
                <img src="images/iphone.jpg" alt="iPhone 13">
                <h3>iPhone 13</h3>
                <p class="price">$799.99</p>
                <button class="add-to-cart" data-id="1">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="images/airpods.jpg" alt="AirPods Pro">
                <h3>AirPods Pro</h3>
                <p class="price">$249.99</p>
                <button class="add-to-cart" data-id="2">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="images/charger.jpg" alt="USB-C Charger">
                <h3>USB-C Fast Charger</h3>
                <p class="price">$29.99</p>
                <button class="add-to-cart" data-id="3">Add to Cart</button>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>
