<?php
// Connect to your database
$conn = new mysqli("localhost", "username", "password", "database_name");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user count
$user_query = "SELECT COUNT(*) as count FROM users";
$user_result = $conn->query($user_query);
$user_count = $user_result->fetch_assoc()['count'];

// Fetch revenue data
$revenue_query = "SELECT SUM(amount) as revenue FROM payments";
$revenue_result = $conn->query($revenue_query);
$revenue = $revenue_result->fetch_assoc()['revenue'];

$conn->close();
?>

<!-- Inject data into the HTML -->
<div class="card">
    <div class="card-info">
        <h3>Users</h3>
        <p><?php echo $user_count; ?></p>
    </div>
    <div class="icon-wrapper">
        <i class="fas fa
