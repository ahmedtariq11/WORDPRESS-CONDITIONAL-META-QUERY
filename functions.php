 
if (isset($_GET[‘location’][0]) && !empty($_GET[‘location’][0])) {
// restrict
$meta[] = array(
‘key’ => ‘location’,
‘value’ => $_GET[‘location’][0] ,
‘compare’ => ‘LIKE’);
}
if (isset($_GET[‘language’][0]) && !empty($_GET[‘language’][0])) {
$meta[] = array(
‘key’ => ‘language’,
‘value’ => $_GET[‘language’][0],
‘compare’ => ‘LIKE’);
}
if (isset($_GET[‘pr_area’][0]) && !empty($_GET[‘pr_area’][0])) {
$meta[] = array(
‘key’ => ‘pr_area’,
‘value’ => $_GET[‘pr_area’][0],
‘compare’ => ‘LIKE’);
}
if (isset($_GET[‘keywords’][0]) && !empty($_GET[‘keywords’][0])) {
$meta[] = array(
‘key’ => ‘keywords’,
‘value’ => $_GET[‘keywords’][0],
‘compare’ => ‘LIKE’);
}

$args = array( ‘post_type’ => ‘people’, ‘orderby’ => ‘title’,’order’ => ASC, ‘posts_per_page’ => -1,
‘meta_query’ => array(
‘relation’ => ‘OR’, $meta));
$loop = new WP_Query( $args );
