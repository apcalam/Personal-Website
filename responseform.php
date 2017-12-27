<?php
session_start();
$name = $_SESSION['name'];
unset($_SESSION['name']);
$company = $_SESSION['company'];
unset($_SESSION['company']);
$email= $_SESSION['email'];
unset($_SESSION['email']);
$phone= $_SESSION['phone'];
unset($_SESSION['phone']);
$reason= $_SESSION['reason'];
unset($_SESSION['reason']);
$message= $_SESSION['message'];
unset($_SESSION['message']);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Aparna Calambur</title>
  <link rel = "stylesheet" type = "text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
</head>

<body>
  <!--Header with my name and title to the left and contact information to the right-->
  <?php
  include "includes/header.php";
  ?>

  <article>
    <!--Response after form is submitted-->
    <h2>Your form has been successfully submitted!</h2>
    <form action="responseform.php" method="post" id="mainForm" novalidate>
      <div class="contact_form">
        <label for="name">Name:</label>
        <p><?php echo(htmlspecialchars($name)); ?></p>
        <label for="company">Company/Organization:</label>
        <p><?php echo(htmlspecialchars($company)); ?></p>
        <label for="mail">Email:</label>
        <p><?php echo(htmlspecialchars($email)); ?></p>
        <label for="phone">Phone Number:</label>
        <p><?php echo(htmlspecialchars($phone)); ?></p>
        <label for="reason">Reason for Contact:</label>
        <p><?php echo(htmlspecialchars($reason)); ?></p>
        <label for="message">Message:</label>
        <p><?php echo(htmlspecialchars($message)); ?></p>
      </div>
  </form>
  </article>

</body>

</html>
