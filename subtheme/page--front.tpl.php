<?php include_once("header.tpl.php"); ?>
<div class="section front-page">
  <div class="container">
    <?php print render($page['featured']); ?>
    <div class="row">
      <div class="column small-8">
        <?php if ($messages): ?><?php print $messages; ?><?php endif; ?>
        <?php print render($page['sidebar_first']); ?>
      </div>
      <div class="column small-4">
        <?php print render($page['sidebar_second']); ?>
      </div>
    </div><!-- row -->
  </div><!-- end of container -->
</div><!-- end of section -->
<?php include_once("footer.tpl.php"); ?>