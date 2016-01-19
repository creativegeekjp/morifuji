<div id="breadcrumbs" role="contentinfo">

	<ul style="">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="">TOP ⇒ </a></li>
	</ul>
<?php
//if the post has a parent
if($post->post_parent){
  //collect ancestor pages
  $relations = get_post_ancestors($post->ID);
  //get child pages
  $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
  if ($result){
    foreach($result as $pageID){
      array_push($relations, $pageID->ID);
    }
  }
  //add current post to pages
  array_push($relations, $post->ID);
  //get comma delimited list of children and parents and self
  $relations_string = implode(",",$relations);
  //use include to list only the collected pages. 
  $sidelinks = wp_list_pages("title_li=&echo=0&include=".$relations_string);
}else{
  // display only main level and children
  $sidelinks = wp_list_pages("title_li=&echo=0&depth=1&child_of=".$post->ID);
}

if ($sidelinks) { ?>
  <ul>
    <?php //links in <li> tags
    echo $sidelinks; ?>
  </ul>         
<?php } ?>

</div>