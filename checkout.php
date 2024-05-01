<!-- Include Header -->
<?php include('header.html'); ?>

<main>
    <div class="container">
        <h2>Checkout</h2>
        <!-- Display order summary and form for delivery details -->
        <div class="order-summary">
            <!-- Display order summary dynamically -->
            <p>Total: $25.98</p>
        </div>
        <form action="checkout_process.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            <label for="address">Address</label>
            <textarea id="address" name="address" required></textarea>
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>
            <button type="submit">Place Order</button>
        </form>
    </div>
</main>

<!-- Include Footer -->
<?php include('footer.html'); ?>
