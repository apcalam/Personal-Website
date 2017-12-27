<?php
  $submit = $_REQUEST["submit"];
  // Stores the name of the class for hidden error messages
  $HIDDEN_ERROR_CLASS = "hiddenError";
  if (isset($submit)) {
    $name = $_REQUEST["name"];
    $company = $_REQUEST["company"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $reason = $_REQUEST["reason"];
    $message = $_REQUEST["message"];

    if( !empty($name) ) {
      // the first name field is valid
      $nameValid = true;
    } else {
      // the first name field is not valid
      $nameValid = false;
    }
    if( !empty($company) ) {
      // the last name field is valid
      $companyValid = true;
    } else {
      // the last name field is not valid
      $companyValid = false;
    }
    if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // the email field is valid
      $emailValid = true;
    } else {
      // the email field is not valid
      $emailValid = false;
    }
    if( !empty($reason) ) {
      // the last name field is valid
      $reasonValid = true;
    } else {
      // the last name field is not valid
      $reasonValid = false;
    }
    $formValid = $nameValid && $companyValid && $emailValid && $reasonValid;
    // if valid, allow submission
    if ($formValid) {
      // redirect to formSubmitted.php
      session_start();
      $_SESSION["name"] = $name;
      $_SESSION["company"] = $company;
      $_SESSION["email"] = $email;
      $_SESSION["phone"] = $phone;
      $_SESSION["reason"] = $reason;
      $_SESSION["message"] = $message;
      header("Location: responseform.php");
      return;
    }
  } else {
    $nameValid = true;
    $companyValid = true;
    $emailValid = true;
    $reasonValid = true;
  }
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
    <div class="centerPane">
      <h2>Contact Form</h2>
      <!--This is the contact form for my website-->
      <form action="form.php" method="post" id="mainForm" novalidate>
        <div class="contact_form">
          <label for="name">Name:<span class="errorContainer <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>"
            id="nameError">Name Required</span></label>
          <input type="text" id="name" name="name" value="<?php echo($name);?>" placeholder="Your name.." required/>
          <label for="company">Company/Organization:<span class="errorContainer <?php if ($companyValid) {
            echo($HIDDEN_ERROR_CLASS);} ?>" id="coError">
            Company/Organization Required</span></label>
          <input type="text" id="company" name="company" value="<?php echo($company);?>" placeholder="Your company.."
          required/>
          <label for="mail">Email:<span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>"
            id="emailError">Valid Email Required</span></label>
          <input type="email" id="mail" name="email" value="<?php echo($email);?>" placeholder="Your email.." required/>
          <label for="phone">Phone Number (optional):</label>
          <input type="text" id="phone" name="phone" value="<?php echo($phone);?>" placeholder="Your phone number.."/>
          <label for="reason">Reason for Contact:<span class="errorContainer <?php if ($reasonValid) {
            echo($HIDDEN_ERROR_CLASS);} ?>" id="reasonError">Reason Required
          </span></label>
          <input type="text" id="reason" name="reason" value="<?php echo($reason);?>" placeholder="Your reason.." required/>
          <label for="message">Message (optional):</label>
          <textarea id="message" name="message" value="<?php echo($message);?>" placeholder="Your Message.."></textarea>
        </div>
      <button name="submit" type="submit">Submit</button>
    </form>
    </div>
  </article>

</body>

</html>
