<!-- Include Header -->
<?php include('header.html'); ?>

<main>
    <div class="container">
        <h2>Cart</h2>
        <!-- Display cart items dynamically -->
        <div class="cart-items">
            <div class="cart-item">
                <img src="item1.jpg" alt="Item 1">
                <h3>Item 1</h3>
                <p>Price: $10.99</p>
                <input type="number" value="1" min="1">
                <button>Update</button>
                <button>Remove</button>
            </div>
            <!-- Repeat for other cart items -->
        </div>
        <button>Checkout</button>
    </div>
</main>

<!-- Include Footer -->
<?php include('footer.html'); ?>
