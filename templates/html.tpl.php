<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php print $head_title; ?></title>
   <meta name="keywords" content="<?php print $meta_tags ?>">
   <meta name="description" content="<?php print $meta_description ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $scripts; ?>
  <?php print $page_bottom; ?>
</body>
</html>
