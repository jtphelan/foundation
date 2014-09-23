<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="section">
<div class="container">
<div class="row">
<?php foreach ($rows as $id => $row): ?>
  <div class="small-block-grid-2 medium-block-grid-3 large-block-grid-4 <?php if ($classes_array[$id]) { print $classes_array[$id];  } ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
</div>
</div>