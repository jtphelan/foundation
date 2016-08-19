<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php
  $link = url($content['field_link']['#items'][0]['url'], $content['field_link']['#items'][0]);
  $icon = '';
  if(!empty($content['field_icon'])) {
    $icon = '<i class="fa ' . $content['field_icon']['#items'][0]['safe_value'] . '" aria-hidden="true"></i> ';
  }
  $btn_classes = 'hd-btn-' . $content['field_link_type']['#items'][0]['value'];
  $btn_classes .= ' btn-size-' . $content['field_button_size']['#items'][0]['value'];
  if($content['field_full_width']['#items'][0]['value']) {
    $btn_classes .= ' btn-full';
  }
  if($icon && !empty($content['field_subtitle'])) {
    $btn_classes .= ' icon-twolines';
  }
  
?>
<a href="<?php print $link ?>" class="<?php print $btn_classes ?>"><?php print $icon . $content['field_link']['#items'][0]['title']; ?><?php print (!empty($content['field_subtitle']) ? '<span>' . $content['field_subtitle']['#items'][0]['safe_value'] . '</span>' : ''); ?></a>
