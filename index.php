<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Aparna Calambur</title>
  <link rel = "stylesheet" type = "text/css" href="styles/all.css" media="all"/>
</head>

<body>
  <!--Header with my name and title to the left and contact information to the right-->
  <?php
  include "includes/header.php";
  ?>

  <!--Content of the "Home" page contains a picture of myself and a brief introduction-->
  <article>
    <h2>Home</h2>
    <div class="intro">
      <figure class="my_pic">
        <!--This is a picture taken from my own camera-->
        <img alt="Picture of myself" src ="images/my_pic.jpg" class="aparna">
        <figcaption>
          This is a picture of me in Dubai that was taken on my camera.
        </figcaption>
      </figure>
      <p>My name is Aparna Calambur and I am freshman at Cornell University in the College of Engineering, majoring in
        Information Science, Systems, and Technology. I am interested in Web Applications Development, and am currently
        enrolled in an introductory course in web development. By the end of my first semester, I hope to improve upon my
        design principles and have the coding skills in order to build a user friendly and well designed website.</p>
    </div>
  </article>

</body>

</html>
