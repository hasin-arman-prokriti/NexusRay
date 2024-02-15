
<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "nexusray");

// Check if the product ID was passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the product details from the database
    $sql = "SELECT * FROM products WHERE product_id = $id";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $description = $row['description'];
        //$price = $row['price'];
        // ...
    } else {
        echo "Product not found";
    }
} else {
    echo "Invalid product ID";
}

// Close the database connection
mysqli_close($conn);
?>
<?php
// Connect to your database
$dsn = 'mysql:host=localhost;dbname=nexusray';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$pdo = new PDO($dsn, $username, $password, $options);

// Query your database for the products
$query = 'SELECT * FROM products';
$stmt = $pdo->query($query);
?>
<!--- Loop through the query results and generate HTML cards -->
<div class="row">

<?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
    <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-4">
        <div class="card mb-3 shadow-sm">
            <img class="card-img-top"  style="width: 265px; height: 195px;" src="<?php echo $row['image_url']; ?>" >
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                <p class="card-text"><?php echo '$'.$row['price']; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="product_details.php?id=<?php echo $row['product_id']; ?>" class="btn btn-sm btn-outline-secondary">Learn more</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
