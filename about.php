<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>About</title>
</head>

<body>
<div class="content_wrapper">
  <?php
  $navWork = "";
  $navAbout ="current_page";
  $navContact ="";
  include("includes/header.php");
  ?>
  <div class="spacer200px"></div>
  <p class="header">About me</p>
  <p class="body secondary">
  Hello! I’m Xiaoxiang, an interaction designer studying Information Science at Cornell with a concentration in Interactive Technologies. I enjoy multi-disciplinary challenges and love the balance between usability and aesthetics.</p>


  <p class="body secondary">Thank you for taking the time to look through my work, please don't hesitate to reach out to me at xm53@cornell.edu!</p>
  <div class="push"></div>
</div>

<?php
  include("includes/footer.php");
  ?>
</body>
</html>
