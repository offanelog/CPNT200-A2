<?php
  
  include('includes/_config.php');

  // get id (#)
  $id = $_GET['id'];

  // display customer by id (#)
  $sql = "SELECT * FROM customer WHERE id='$id'";

  // result
  $result = mysqli_query($conn, $sql);

  // fetch customer as array
  $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer Profile</title>
   <!-- css goes here -->
   <link rel="stylesheet" href="assets/css/main.css"/>
   <link rel="stylesheet" href="https://offanelog.github.io/assets/fonts/google_fonts.css">
</head>
<body>
  
  <h3>
    <?php echo $customer[0]['first_name']; ?>
    <?php echo $customer[0]['last_name']; ?>
  </h3>
  <div class="customer-list">
  <ul>
    <li>DOB: <?php echo $customer[0]['dob']; ?></li>
    <<li>Phone: <?php echo $customers[0]['phone']; ?></li>
    <li>Email: <?php echo $customer[0]['email']; ?></li>
    <li>Driver license number: <?php echo $customers[0]['driver_license_number']; ?></li>
        </ul>
  </div>
  <a href="index.php"><p>Back</p></a>
</body>
</html>