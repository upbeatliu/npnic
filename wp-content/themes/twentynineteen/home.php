<?php

/**
 * Template Name: Home Page 
 *
 * @package APnic
 */

?>

<?php get_header(); ?>

<div class="container">	

	<?php
	$json = apnic_get_remote();
	// var_dump( $json );
	// die();
	$posts = $json['virtualLabs'];
?>
	<div class="list-number"><p><span class="count"><?php echo count($posts); ?></span>&#32;items</p></div>
	
<?php
	foreach ($posts as $post) {	
	?>
  <div class="apnic-post">
  	<div class="img-wrap">
  		<img src="<?php echo $post['thumbnail']; ?>" />
  	</div>	      
    <div class="text-wrap">
    	<div class="title-lang">
    		<h3><?php echo $post['name']; ?></h4>
	      <div class="lang-duration">
	    	<p><?php echo $post['language']; ?>
      	<?php echo $post['formattedDuration']; ?></p></div>
    	</div>
    	
      <p><?php echo $post['description']; ?></p>
    </div>      
  </div>

	<?php
	}
	?>

</div>
<?php get_footer(); ?>