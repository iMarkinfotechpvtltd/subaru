      <div class="side-bar-section">
       
         
       <div class="recenta-post"> 
       <h3>Recent Posts</h3> 
         <ul>
		<?php 
		global $post;
		query_posts('post_type=news&showposts=5&post_status=publish&order=desc'); 
		while (have_posts()) : the_post(); 
	
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; wp_reset_query(); ?>
         </ul>
         </div>
         
         <div class="category-post"> 
          <h3>Categories</h3>
		  
         <ul>
			
			<?php

					$args=array(

						'taxonomy' => 'news_categories',

						'orderby' => 'name',

						'order' => 'desc'						

						);

					$categories=get_categories($args);

				foreach($categories as $cat) {  
			?><li><a href="<?php echo get_category_link($cat->cat_ID);?>"><?php echo $cat->cat_name;?></a></li> 
			<?php } ?>
        </ul>
        </div>
         
         <div class="category-post"> 
          <h3>Recent Comments</h3>
         <ul>
			<?php
			$args = array(
			'parent'=>0,   
			'post_type' => 'news',
			'number' => '5',
			'orderby' => 'date',
			'order' => 'DESC'
			);

			$comments = get_comments($args);
			foreach($comments as $comment) :
			?><li><a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo($comment->comment_author . '<br />' . $comment->comment_content);?></a></li>
			<?php endforeach;
			?>
           
      
         </ul>
         </div>
         
       </div> <!--side-bar-section Close-->
    
	