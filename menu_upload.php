// menu_upload.php
<?php
// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Insert menu item into database
    $sql = "INSERT INTO menu (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image_url')";
    if ($conn->query($sql) === TRUE) {
        echo "Menu item uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
