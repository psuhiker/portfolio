<ul class="filter-list">
  <?php
  unset($search_query['post_type']);
  foreach ($search_query as $key => $value) {
    // var_dump("KEY =" . $key . " and VALUE = " . $value);
    $unset = $search_query;
    unset($unset[$key]);

    $formatted_query = array_reduce(
      array_keys($unset),
      function ($carry, $key) use ($unset) {
        return $carry . $key . '=' . htmlspecialchars( $unset[$key] ) . '&';
      },
      '');
      $formatted_query = rtrim($formatted_query, '&');


    if(!empty($value)) {
      $friendly_value = friendly_title($value);
      ?>
      <li class="filter-list__item"><a href="<?php echo get_site_url(null, '/job?' . $formatted_query); ?>"><?php echo ($key == 'employment_school' ? get_the_title($value) : $friendly_value); ?></a></li>
    <?php }; ?>
  <?php }; ?>
  <?php //if (!empty($formatted_query)) : ?>
    <li class="filter-list__clear"><a href="<?php echo get_site_url(null, '/job?'); ?>">Clear Tags</a></li>
  <?php //endif; ?>
</ul>
