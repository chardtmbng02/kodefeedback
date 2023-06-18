<!-- Initializing Connection from SQL Server -->
<?php include('./controllers/db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Leave Feedback</title>
</head>

<body>
<?php include('./components/NavigationBar.Inc.php'); ?>
  <main>
    <div class="container d-flex flex-column align-items-center">

      <h2>Feedback</h2>

      <?php
      // SQL query
      $className = "font-weight-bold";
      $sql = "SELECT * FROM kodefeed_tbl ORDER BY fb_date DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      
        // Loop through each row of the result
        while ($row = $result->fetch_assoc()) {
          // Access individual columns using $row['column_name']
          $fb_id = $row['feedback_ID'];
          $fb_name = $row['fb_name'];
          $fb_email = $row['fb_email'];
          $fb_message = $row['fb_message'];
          $fb_date = $row['fb_date'];

          // Display the data
          echo '<div class="card my-3 kfb-width">';
          echo '<div class="card-body text-center">';
          echo "<p>$fb_message</p>";
          echo "<p>Name : $fb_name</p>";
          echo "<p>Email: $fb_email</p>";
          echo "<p>$fb_date</p>";
          echo '</div>';
          echo '</div>';
        }


      } else {
        echo "No records found.";
      }

      // Close the connection
      $conn->close();
      ?>

    </div>
  </main>

  <?php include('./components/Footer.Inc.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>