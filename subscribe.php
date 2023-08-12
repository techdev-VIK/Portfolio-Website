<!DOCTYPE html>
<html>
<head>
    <title>Subscription Confirmation</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $_POST["email"];
        // You can add code here to store the email in a database or perform other actions
        
        // Display a thank you message
        echo "<h2>Thank You for Subscribing!</h2>";
        echo "<p>You have subscribed with the email: $email</p>";
    } else {
        echo "<h2>Subscription Confirmation</h2>";
        echo "<p>No subscription data received.</p>";
    }
    ?>
</body>
</html>
