<!DOCTYPE html>
<html>
<head>
  <title>Order Flowers</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f5f5f5;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      margin: 0;
    }

    .card {
      width: 300px;
      border: #d24343 5px solid;
      border-radius: 30px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      padding: 30px;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card-header {
      text-align: center;
      background-color: #f47a7a;
      color: #fff;
      border-radius: 10px 10px 0 0;
      padding: 10px 0;
      margin-top: 20px; /* Adjust this value for spacing */
    }

    .card-body {
      padding: 20px 0;
    }


    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    .form-control {
      width: 100%;
      border: 3px solid #ccc;
      border-radius: 5px;
      padding: 8px;
    }

    #flower_image {
      max-width: 70px;
      height: 200px;
      display: block;
      margin-top: 10px;
    }

    .login_btn {
      background-color: #f47a7a;
      color: #fff;
      width: 100%;
      border: none;
      border-radius: 10px;
      padding: 15px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .login_btn:hover {
      background-color: #d24343;
      transform: scale(1.05);
    }

    .success-message,
    .error-message {
      background-color: #dff0d8;
      color: #3c763d;
      border: 1px solid #d6e9c6;
      padding: 10px;
      margin: 20px 0;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    /* Add a class to trigger the fade-in animation */
    .message-show {
      opacity: 1;
    }

    .links a {
      color: #f47a7a;
      text-decoration: none;
      margin-right: 10px;
      transition: color 0.3s ease;
    }

    .links a:hover {
      color: #d24343;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>Order Flowers</h1>
      </div>
      <div class="card-body">
      <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = ""; // Set your database password
            $dbname = "florist";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $flower_name = $_POST['flower_name'];
            $quantity = $_POST['quantity'];
            $customer_name = $_POST['customer_name'];
            $customer_email = $_POST['customer_email'];
            $customer_phone = $_POST['customer_phone'];
            $delivery_address = $_POST['delivery_address'];

            $stmt = $conn->prepare("INSERT INTO orders (flower_name, quantity, customer_name, customer_email, customer_phone, delivery_address) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sissss", $flower_name, $quantity, $customer_name, $customer_email, $customer_phone, $delivery_address);
            if ($stmt->execute()) {
              echo '<div class="success-message message-show">Order placed successfully!</div>';
            } else {
              echo '<div class="error-message message-show">Error: ' . $stmt->error . '</div>';
            }
            $stmt->close();
            $conn->close();
          }
        ?>
        <form action="page-commande.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="flower_name">Flower Name:</label>
            <input type="text" id="flower_name" name="flower_name" required>
          </div>
          <div class="form-group">
            <label for="flower_picture">Flower Picture:</label>
            <img id="flower_image" src="" alt="Flower Picture" style="max-width: 200px;">
          </div>
          <div class="form-group">
            <label for="flower_price"></label>
            <p id="flower_price"></p>
          </div>
          <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
          </div>
          <div class="form-group">
            <label for="customer_name">Your Name:</label>
            <input type="text" id="customer_name" name="customer_name" required>
          </div>
          <div class="form-group">
            <label for="customer_email">Your Email:</label>
            <input type="email" id="customer_email" name="customer_email" required>
          </div>
          <div class="form-group">
            <label for="customer_phone">Your Phone:</label>
            <input type="tel" id="customer_phone" name="customer_phone" required>
          </div>
          <div class="form-group">
            <label for="delivery_address">Delivery Address:</label>
            <textarea id="delivery_address" name="delivery_address" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Place Order" class="login_btn">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Add any JavaScript code here -->
  <script>
    // Function to extract query parameters from URL
    function getQueryParams(url) {
      const queryString = url.split('?')[1];
      const params = {};
      const paramPairs = queryString.split('&');
      for (const pair of paramPairs) {
        const [key, value] = pair.split('=');
        params[key] = decodeURIComponent(value);
      }
      return params;
    }

    // Function to set the flower name, price, and picture based on the clicked image
    function setFlowerInfo() {
      const params = getQueryParams(window.location.href);
      if (params.flower_name && params.flower_price && params.flower_image) {
        const flowerNameInput = document.getElementById('flower_name');
        const flowerPrice = document.getElementById('flower_price');
        const flowerImage = document.getElementById('flower_image');

        flowerNameInput.value = params.flower_name;
        flowerPrice.textContent = "Price: $" + params.flower_price;
        flowerImage.src = params.flower_image;
      }
    }

    // Call the function when the page loads
    window.onload = setFlowerInfo;
  </script>
</body>
</html>
