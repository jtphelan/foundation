<?php
  $icon = '';
  if(!empty($content['field_icon'])) {
    $icon = '<i class="fa ' . $content['field_icon']['#items'][0]['safe_value'] . '" aria-hidden="true"></i> ';
  }
  $type = check_plain($content['field_heading_type'][0]['#markup']);
  print '<' . $type . (!empty($content['field_classes']['#items']) ? ' class="' . $content['field_classes']['#items'][0]['safe_value'] . '"' : '') . '>' . $icon . filter_xss($content['field_title'][0]['#markup']) . '</' . $type . '>';
?>
