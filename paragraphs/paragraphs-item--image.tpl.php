<?php
  $link = '';
  $classes = '';
  if(!empty($content['field_link'])) {
    $link = url($content['field_link']['#items'][0]['url'], $content['field_link']['#items'][0]);
  }
  if(!empty($content['field_classes']['#items'])) {
    $classes = $content['field_classes']['#items'][0]['safe_value'] . ' ';
  }
  $classes .= 'img-' . check_plain($content['field_image_placement']['#items'][0]['value']);
  if($content['field_image_placement']['#items'][0]['value'] == 'full') {
    $image_style = 'full_width';
  } else {
    $image_style = 'large';
  }
  $variables = array(
    'path' => image_style_url($image_style, $content['field_image']['#items'][0]['uri']), 
    'alt' => $content['field_image']['#items'][0]['alt'],
    'title' => $content['field_image']['#items'][0]['title'],
    'attributes' => array('class' => $classes),
  );
  $img = theme('image', $variables);
?>
<?php if($link): ?><a href="<?php print $link; ?>" ><?php endif; ?>
  <?php print $img; ?>
<?php if($link): ?></a><?php endif; ?>
