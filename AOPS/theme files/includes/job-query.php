<?php
global $query_string;
global $search;
$query_args = explode("&", $query_string);
$search_query = array();
foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
};

// Set keyword to '' if NULL
$search_query['s'] = $search_query['s'] == NULL ? '' : $search_query['s'];
// Taxonomy terms query search

// Shows terms searched above job results
$term_replace = $search_query['employment_position_level'] . ' ';
foreach($term_array as $term) {
  $term .= ($term == end($term_array) ? '' : ', ');
  $term_replace .= str_replace('-', ' ', $term);
};

$meta_targets = ['employment_position_length', 'employment_position_type', 'employment_school', 'employment_position_level'];
$meta_array = filter_array_targets($search_query, $meta_targets);

$term_targets = ['term_1','term_2','term_3','term_4',];
$term_array = filter_array_targets($search_query, $term_targets);


// args array to send into wp_query.
$args = array(
'tax_query' => tax_query_function($term_array),
'meta_query' => array_map("filter_meta_query", array_keys($meta_array), $meta_array),
's' => $search_query['s'],
);
$search = new WP_Query($args);
// echo '<br>';
// var_dump("TERM ARRAY");
// var_dump($term_array);
// var_dump("TERM ARRAY");
// echo '<br>';
// var_dump("TERM REPLACE");
// var_dump($term_replace);
// var_dump("TERM REPLACE");
// echo '<br>';
// var_dump("POST TYPE");
// var_dump($post_type);
// var_dump("POST TYPE");
// echo '<br>';
// var_dump("SEARCH QUERY");
// var_dump($search_query);
// var_dump("SEARCH QUERY");
// echo '<br>';
// var_dump("KEYWORD");
// var_dump($search_query['s']);
// var_dump("KEYWORD");
?>
