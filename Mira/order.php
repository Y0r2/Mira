<?php
// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
} else {
    // Redirect to the order page if accessed directly
    header("Location: order.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Confirmation - Mira Luxury Fragrances</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <section class="confirmation-message">
    <h1>Thank You for Your Order!</h1>
    <p>Your order has been successfully received. Check your email for confirmation.</p>
    <div class="order-details">
      <h2>Order Details</h2>
      <p><strong>Name:</strong> <?php echo $name; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
    </div>
    <a href="index.html" class="back-home-button">Back to Home</a>
  </section>
</body>
</html>
