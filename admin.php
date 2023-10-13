<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "florist";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all flower orders from the database
$sql = "SELECT * FROM flower_orders ORDER BY order_date DESC";
$result = $conn->query($sql);
$flowerOrders = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $flowerOrders[] = $row;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <h1>Admin Panel - Flower Orders</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Flower Name</th>
            <th>Quantity</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Phone</th>
            <th>Delivery Address</th>
            <th>Order Date</th>
        </tr>
        <?php foreach ($flowerOrders as $order) { ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['flower_name']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
                <td><?php echo $order['customer_name']; ?></td>
                <td><?php echo $order['customer_email']; ?></td>
                <td><?php echo $order['customer_phone']; ?></td>
                <td><?php echo $order['delivery_address']; ?></td>
                <td><?php echo $order['order_date']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
