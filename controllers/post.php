<?php include('./db_connect.php'); ?>
<?php
// Retrieve form data
$id = random_int(1, 9999);
$name = $_POST['name'];
$email = $_POST['email'];
$body = $_POST['body'];
$date = date('Y-m-d H:i:s');

// Prepare the SQL statement for insert
$sql = "INSERT INTO kodefeed_tbl (feedback_ID, fb_name, fb_email, fb_message, fb_date ) VALUES ('$id','$name', '$email', '$body', '$date')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo 'Record inserted successfully';
    header('Location:../feedback.php');
} else {
    echo 'Error inserting record: ' . $conn->error;
}

// Close the database connection
$conn->close();

?>