<?php include_once("header.tpl.php"); ?>
<?php $path = path_to_theme(); ?>
<div class="section main">
  <div class="container">
      <div class="row">
        <div class="column small-12 main-title">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
        </div>
      </div>
      <div class="row">
        <div class="main-content column <?php print ($page['sidebar_second'] ? 'small-8' : 'small-12'); ?>">
          <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
          <?php if ($messages): ?><?php print $messages; ?><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php print render($page['content']); ?>
        </div>
        <?php if($page['sidebar_second']): ?>
        <div class="column small-4 main-left">
          <?php print render($page['sidebar_second']); ?>
       </div>
       <?php endif; ?>
    </div><!-- w-row -->
  </div><!-- end of w-container -->
</div><!-- end of section -->
<?php include_once("footer.tpl.php"); ?>
