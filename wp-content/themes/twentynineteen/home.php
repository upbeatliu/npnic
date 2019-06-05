<?php

/**
 * Template Name: Home Page 
 *
 * @package APnic
 */

?>

<?php get_header(); ?>

<?php
$json = apnic_get_remote();
// var_dump( $json );
// die();
$posts = $json['virtualLabs'];
	
foreach ($posts as $post) {	
?>
  <div class="apnic-posts">
      <div class="image-container"><img src="<?php echo $post['thumbnail']; ?>" />    </div>
      <h4><?php echo $post['name']; ?></h4>
      <p><?php echo $post['description']; ?></p>
  </div>

<?php
}
?>


<?php get_footer(); ?>