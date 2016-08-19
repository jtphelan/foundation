<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <ul class="xs-block-grid-2 small-block-grid-4 medium-block-grid-6">
  <?php foreach ($items as $delta => $item): ?>
    <li><?php print render($item); ?></li>
  <?php endforeach; ?>
  </ul>
</div>