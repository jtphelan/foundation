<?php if ($logged_in && user_access('access admin theme')): ?>
		<?php include_once("sites/all/themes/admin/admin-nav.tpl.php"); ?>
<?php endif; ?>
<div class="section navigation">
  <div class="container">
    <?php print render($page['header']); ?>
  </div><!-- end of container -->
</div><!-- end of section -->
<div class="section header clearfix">
  <div class="container">
      <div class="row">
        <div class="column medium-5 xs-6"><a href="/" class="logo"><img  src="/<?php print path_to_theme(); ?>/images/logo.png" alt="<?php print $site_name; ?>" class="img-responsive" ></a></div>
        <div class="column medium-7 xs-6"></div>
    </div><!-- row -->
  </div><!-- end of container -->
</div><!-- end of section -->
