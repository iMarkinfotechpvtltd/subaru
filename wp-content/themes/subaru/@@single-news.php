<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
while (have_posts()) : the_post(); 
 ?>

					<?php
					$image33 = get_post_meta($post->ID,"news_banner_image",true);
					$aggregate_image = wp_get_attachment_image_src($image33,'news_banner_image');
					$urll = $aggregate_image['0'];
					if(!empty($urll)) 
					{
					?>
					<div class="banner" alt="news banner" style="background-image:url(<?php echo $urll;?>);background-position:center center;">

					</div>
					<?php
					}

					else
					{
					?>														
					<div class="banner" alt="news banner"  style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/subapedia/subapedia-banner.jpg);background-position:center center;"></div>
					<?php
					}
					?>
				
	<?php endwhile; ?>
    <div class="clearfix"></div>

    <div class="main-search-sec">
        <div class="container">
            <div class="main-search ">
                <form>
                    <div class="form-group select-in">
                        <select class="form-control">
                            <option>Search by category</option>
                            <option>Engine</option>
                            <option>Gearbox</option>
                            <option>Parts</option>
                        </select>
                    </div>
                    <div class="form-group search-in">
                        <input type="text" class="form-control" placeholder="Search website">
                    </div>
                    <button type="submit" class="main-search-btn">search</button>

                </form>
            </div>
        </div>
    </div>

    
    
<div class="container">
 <div class="opportunities">
   
   <div class="breadcrumb-container">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Subapaedia</a></li>
      <li><a href="#">Subaru News & Articles </a></li>
      <li class="active">NEWS</li>
      </ol>
   </div>
   
  <h2>News</h2> 
  
  <div class="row mk00">
     <div class="col-xs-12 col-md-7 news-section">
      
       <div class="author-post-headding news">
         <h3><?php the_title();?></h3>  
         <ul class="post-cmts">
           <li class="time"><?php $post_date=$post->post_date; echo date('F j, Y ', strtotime($post_date)); ?></li>
           <li class="author-name"> <?php the_author(); ?> </li>
           <li class="folder-name">WORDS FROM THE DIRECTOR</li>
           <li class="commetns">
		   <?php          $comments_count = wp_count_comments( $post->ID );
							$comm_count=$comments_count->approved;
							echo $comm_count; ?> Comments</li>
         </ul>
       </div> 
	   <?php
						$post_id= $post->ID;
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'news_inner_image' );
						$ura = $thumb['0'];
						if(!empty($ura)) 
						{
						?>
						<img src="<?php echo $ura;?>" alt="<?php the_title();?>" class="img-responsive">
						<?php
						}
						else
						{
						}
						the_content();
						?>
		             
  
  <div class="row mk11">
    <div class="col-xs-12 col-sm-4">
      <button type="button" class="btn btn-default btn-quote quote">Get A Quote</button>
    </div> <!--col-xs-12 col-sm-4-->
    <div class="col-xs-12 col-sm-4">
      <a href='tel:+<?php echo get_option('call'); ?>' class="btn btn-default btn-quote helpline"><?php echo get_option('call'); ?></a>
    </div> <!--col-xs-12 col-sm-4--> 
    <div class="col-xs-12 col-sm-4">
      <a href="tel:+<?php echo get_option('afterhours'); ?>" class="btn btn-default btn-quote helpline"><?php echo get_option('afterhours'); ?></a>
    </div> <!--col-xs-12 col-sm-4-->
   </div>  <!--row-->
     
</div> <!--col-xs-12 col-md-7--->

    
     
     <div class="col-xs-12 col-md-4 col-md-offset-1">
      	<?php get_sidebar('news'); ?> 
	</div> <!--col-xs-12 col-md-4 col-md-offset-1-->
  </div> <!--row-->
   
 </div> <!--opportunities Close-->
</div>


<div class="latestposts">
  <div class="container">
    <h2>Latest Posts</h2>
    <p>Soluta consequat no has. Has ex deleniti consulatu, tamquam interpretaris sit ex <br>
no has. Has ex deonsul vivendum ullamcorper et his.</p>
    <div class="row">
	<?php 
		global $post;
		query_posts('post_type=news&showposts=3&post_status=publish&orderby=post_date&order=DESC');  
		while (have_posts()) : the_post(); 
	
		?>
		
      <div class="col-xs-12 col-md-4">
		<?php
		$post_id= $post->ID;
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'latestnews_image' );
		$ural = $thumb['0'];
		if(!empty($ural)) 
		{
		?>


		<img src="<?php echo $ural;?>" alt="<?php the_title();?>" />
		<?php
		}
		else
		{
		?>
		<img src="https://placeholdit.imgix.net/~text?txtsize=26&txt=No+image+found&w=461&h=255" alt="<?php the_title();?>" />	
		<?php	
		}
		?>
						
        <div class="blog-tittles">
          
          <h3><?php the_title();?></h3>
           <?php the_field('news_content'); ?>
          
           <a href="<?php the_permalink(); ?>" class="news-art-btn">Read More...</a>
        </div>
      </div>
	 <?php endwhile; ?>
	  <!--col-md-4-->
      
      <div class="col-xs-12">
          <span class="plus-btn"><i class="mor-plus"></i></span>
          <hr>
      </div>
    </div> <!--row Close-->
  </div>
</div>  <!--latest-post-->

<div id="carousel-example-generic" class="carousel slide team-carousel" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <div class="container">
     <div class="row">
      <div class="col-md-5">
        <img src="../asset/images/slide-img.png" alt="..." />
      </div>
      <div class="col-md-7 col-md-offset-5">
         <h2>Niazi Helou</h2>
         <h4>Director</h4>
         <p>Director at All Drive, Niazi too has had a lifelong passion for cars, starting with Mazda, then moving into Subaru. He has a mechanical engineering diploma, and specializes in engine and gearbox repairs and rebuilding. He also has a passion for business management, and wants to make All Drive the most efficient and most customer-oriented workshop in the business. Niazi especially enjoys the public relations role at All Drive, working with customers to plan the best solutions for their Subaru needs. Niazi is also a family man, active in his church, and has four kids. He loves fishing and gardening in his limited spare time.</p>
         
         <button class="btn btn-default btn-read" type="button">Meet the team</button>
       </div>
      </div>
     </div> <!--row-->
    </div> <!--item Close-->
    <div class="item">
     <div class="container">
     <div class="row">
      <div class="col-md-5">
        <img src="../asset/images/slide-img.png" alt="..." />
      </div>
      <div class="col-md-7 col-md-offset-5">
         <h2>Niazi Helou</h2>
         <h4>Director</h4>
         <p>Director at All Drive, Niazi too has had a lifelong passion for cars, starting with Mazda, then moving into Subaru. He has a mechanical engineering diploma, and specializes in engine and gearbox repairs and rebuilding. He also has a passion for business management, and wants to make All Drive the most efficient and most customer-oriented workshop in the business. Niazi especially enjoys the public relations role at All Drive, working with customers to plan the best solutions for their Subaru needs. Niazi is also a family man, active in his church, and has four kids. He loves fishing and gardening in his limited spare time.</p>
         
         <button class="btn btn-default btn-read" type="button">Meet the team</button>
       </div>
      </div>
     </div> <!--row-->
    </div> <!--item Close-->
    <div class="item">
     <div class="container">
     <div class="row">
      <div class="col-md-5">
        <img src="../asset/images/slide-img.png" alt="..." />
      </div>
      <div class="col-md-7 col-md-offset-5">
         <h2>Niazi Helou</h2>
         <h4>Director</h4>
         <p>Director at All Drive, Niazi too has had a lifelong passion for cars, starting with Mazda, then moving into Subaru. He has a mechanical engineering diploma, and specializes in engine and gearbox repairs and rebuilding. He also has a passion for business management, and wants to make All Drive the most efficient and most customer-oriented workshop in the business. Niazi especially enjoys the public relations role at All Drive, working with customers to plan the best solutions for their Subaru needs. Niazi is also a family man, active in his church, and has four kids. He loves fishing and gardening in his limited spare time.</p>
         
         <button class="btn btn-default btn-read" type="button">Meet the team</button>
       </div>
      </div>
     </div> <!--row-->
    </div> <!--item Close-->


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 
</div> <!--team-carousel close-->

   <div class="all-subro-operates">
        <div class="container">
            <h2><?php the_field('four_departments_title',4); ?></h2>

            <div class="row">
			<?php 
			global $post;
			query_posts('post_type=departments&showposts=4&order=ASC');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>
			
                <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="all-subro-operates-list <?php  if($i==1){echo "service-rep-sec";} else if($i==2){echo "subaru-engines-sec";} else if($i==3){ echo "subaru-transmissions-sec";}else if($i==4){ echo "new-used-parts-sec";}else {echo "service-rep-sec";}?> wow slideInLeft" data-wow-duration="<?php  if($i==1){echo "1.2s";} else if($i==2){echo "1.4s";} else if($i==3){ echo "1.6s";}else if($i==4){ echo "1.8s";}else {echo "1.2s";}?>">
                        <div class="all-subro-operates-heading">
                            <h4><?php the_title();?></h4></div>
                        <div class="all-subro-operates-list-img"> 
						<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'departments_image' );
			            $url = $thumb['0'];
					if(!empty($url)) 
					{
					?>
						<img src="<?php echo $url;?>" class="img-responsive">
					<?php
					}
					else
					{
						?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/all-subro-operates-img-1.jpg" class="img-responsive">
                    <?php    
					}
					?>
						</div>
                        <?php the_content();?> 

                    </div>
                </div>
				<?php $i++; endwhile; ?>
			</div>

        </div>
    </div>
 
    
  <div class="engine-testi-cvr home-testi-cvr">
        <div class="container">
            <h1>what our clientS say about us</h1>

            <div class="engine-testi-tab-btn">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">SERVICES</a></li>
                    <li><a data-toggle="pill" href="#menu1">Engines</a></li>
                    <li><a data-toggle="pill" href="#menu2">GEARBOXES</a></li>
                    <li><a data-toggle="pill" href="#menu3">Parts</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    <div id="engine-testi">

                        <div class="item">
                            <div class="engine-testi-text">
                                <p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

                                <div class="engine-testi-name">
                                    <h4>Michael Zagami </h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="engine-testi-text">
                                <p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

                                <div class="engine-testi-name">
                                    <h4>Joanna Doe</h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>


                        <div class="item">
                            <div class="engine-testi-text">
                                <p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

                                <div class="engine-testi-name">
                                    <h4>Michael Zagami </h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="engine-testi-text">
                                <p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

                                <div class="engine-testi-name">
                                    <h4>Joanna Doe</h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>


                        <div class="item">
                            <div class="engine-testi-text">
                                <p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

                                <div class="engine-testi-name">
                                    <h4>Michael Zagami </h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="engine-testi-text">
                                <p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

                                <div class="engine-testi-name">
                                    <h4>Joanna Doe</h4>
                                    <p>Client Role (If any)</p>
                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="text-center">
                        <a href="#" class="testi-btn">View More TESTIMONIALS</a>
                    </div>

                </div>
                <div id="menu1" class="tab-pane fade">

                </div>
                <div id="menu2" class="tab-pane fade">

                </div>
                <div id="menu3" class="tab-pane fade">

                </div>
            </div>

        </div>

    </div>

    
<div class="container">
 <div class="reply-form">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Leave a Reply</h2>
      <p>Your email address will not be published. Required fields are marked *</p>
      
      <input type="text" class="form-control pull-left" placeholder="Name">
      <input type="text" class="form-control pull-right" placeholder="Mail">
      <input type="text" class="form-control web" placeholder="Website">
      <textarea class="form-control " placeholder="Message"></textarea>
      
      <button type="button" class="btn btn-danger btn-submit">send</button>
    </div> 
  </div>
 </div> <!--reply-form-->
</div>


    <div class="client-logo-sec">
        <div class="container">
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-1.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-2.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-3.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-4.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-5.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-6.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-7.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-8.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-9.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-10.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-11.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-12.png" class="img-responsive"></a>
            </div>
            <div class="client-logo-list">
                <a href="#"><img src="../asset/images/client-logo/client-logo-13.png" class="img-responsive"></a>
            </div>



        </div>
    </div>

<?php get_footer(); ?>
