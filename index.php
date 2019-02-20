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
  <title>Work</title>
</head>

<body>
  <div class="content_wrapper">
  <!-- TODO: This should be your main page for your site. -->
  <?php
  $navWork = "current_page";
  $navAbout ="";
  $navContact ="";
  include("includes/header.php");
  ?>
  <!-- <p class="header">Work</p> -->
  <div class="spacer200px"></div>
  <p class="header">Hi! I’m Xiaoxiang, an interaction designer.</p>
  <p class="body">  Student at Cornell University</p>
  <div class="project-container">
    <?php
    $project_title="Orientation App case study";
    $project_category="UX / Product design";
    $project_info="Showing the most relevant/intriguing events for each user --- a Google design excercise.";
    $project_link="https://medium.com/@xiaoxiangma/google-design-excercise-a2e347886b0b";
    $img_location="images/goog.png";
    include("includes/project.php");
    ?>

    <?php
    $project_title="Spect Branding";
    $project_category="Branding / UX";
    $project_info="Logo, Web, Mobile UI, & Split screen VR design --- a VR mindfulness startup based in Ithaca NY.";
    $project_link="https://medium.com/@xiaoxiangma/spect-ui-mobile-app-for-beta-testers-4e283ef65fdf";
    $img_location="images/spect.png";
    include("includes/project.php");
    ?>

    <?php
    $project_title="Reddit Case Study";
    $project_category="UX";
    $project_info="Hashtag feature for sorting comments --- Refinement of comments' quality.";
    $project_link="https://medium.com/@xiaoxiangma/reddit-concept-reacting-to-comments-913aab5d450a";
    $img_location="images/reddit.png";
    include("includes/project.php");
    ?>

  </div>
  <div class="spacer200px"></div>
  <div class="push"></div>
</div>
  <?php
  include("includes/footer.php");
  ?>

</body>
</html>
