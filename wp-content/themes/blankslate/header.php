<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://agbo-digital.com/wp-content/themes/blankslate/site_javascript.js"></script>
			<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma|Lato:100,300,400,700,900|Play:400,700|Playfair+Display:400,700,900|Poppins:300,400,500,600,700|Quicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="http://dmadsdesign.com/wp-content/themes/blankslate/animate.css">
<?php wp_head(); ?>
</head>



<!-- END DOCTYPE AND HEAD TAGS   -->


	<body>



	<div id="nav-menu-icon-wrapper">
		<ul id="nav">
			<li class="toggle">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</li>  
		</ul>
	</div>


		<header id="header" role="banner">



			<div id="top_nav_bar">
				<a href="http://agbo-digital.com"><div id="brandmark_logotype"></div></a>
				<!-- <a href="http://dmadsdesign-dev.com/_site/juicyfruit-intel-vision-future"><div id="juicyfruit_logotype"></div></a> -->
				<a href="http://agbo-digital.com/spyder-super-soaker-social"><div id="spyder_logotype"></div></a>
				<!-- <div id="email_newsletter"></div> -->
				<a href="http://agbo-digital.com/juicyfruit-intel-vision-future"><div id="juicyfruit"></div></a>


				<table id="news_bar">
					
						<!-- //////// news bar php /////////-->

						<?php $args = array( 'posts_per_page' => 5, 'orderby' => 'post_date','cat' => 7 );
						$recent_posts = get_posts( $args ); ?>
						
						<tr>
						<?php
						foreach ( $recent_posts as $post ) : 
							setup_postdata( $post ); ?>
							<td><a href="<?php {echo get_permalink($post);} ?>"><?php {echo $post->post_title;} ?></a></td>

						<?php endforeach; ?>
						</tr> 
						<?php wp_reset_postdata(); ?>

						<!-- //////// end news bar php /////////-->
					
				</table>


			</div>







			<div id="left_nav_bar">
				<a href="http://agbo-digital.com/client-login"><div id="client_login_button"></div></a>
				<a href="http://agbo-digital.com/spyder-super-soaker-social"><div id="spyder"></div></a>				
			</div>






			<div id="right_nav_bar">
				<div id="search" onclick="SearchIn('mySearch','0')"></div>
				<a href="http://agbo-digital.com/category/thought"><div id="blog"></div></a>
				<a href="http://facebook.com/agbo-digital" target="blank"><div id="facebook"></div></a>
				<a href="#" target="blank"><div id="twitter"></div></a>
				<a href="#" target="blank"><div id="linkedin"></div></a>
				<a href="#" target="blank"><div id="pinterest"></div></a>
			</div>

		</header>   <!-- END HEADER   -->









		
		<div class="lightbox">
			<div id="lightbox-search-button" onclick="SearchIn('mySearch','0')"></div>
			<ul class="nav-list">
				<li><a href="javascript:void">about us</a></li>
				<li><a href="javascript:void">what we do</a></li>
				<li><a href="javascript:void">case studies</a></li>
				<li><a href="javascript:void">think tank</a></li>
				<li><a href="javascript:void">contact us</a></li>
				<li><a href="javascript:void">careers</a></li>
			</ul>
		</div>










		<div id="myContainer">






			








			<div id="search_lightbox">
				<!-- The overlay -->
				<div id="mySearch" class="overlay">
					<a href="http://agbo-digital.com"><div id="lightbox_brandmark"></div></a>
					<!-- Button to close the overlay navigation -->
				  	<a href="javascript:void(0)" class="closebtn" onclick="closeSearch(); closeNav(); closeShare();">&times;</a>
				  	<div id="mySearch_content">
						<!-- <div class="purple_bar"></div> -->
				  		<div id="search_form_div">
				  			<h4>search this site.</h4>
				  			<?php get_search_form(); ?>
				  		</div>	
				  	</div>  <!-- end content -->
				</div> <!-- end overlay -->
			</div>	<!-- end search lightbox -->









			<div id="share_lightbox">
				<!-- The overlay -->
				<div id="myShare" class="overlay">
					<a href="http://agbo-digital.com"><div id="lightbox_brandmark"></div></a>
					<!-- Button to close the overlay navigation -->
				  	<a href="javascript:void(0)" class="closebtn" onclick="closeShare(); closeNav();">&times;</a>
				  	<div class="top_bar"></div>
				  	<div id="myShare_content">
				  		<h4>share this page with your friends.</h4>
				  		<div id="lightbox_share_social_wrap">
							<a href="#"><div id="lightbox_share_facebook"></div></a>
							<a href="#"><div id="lightbox_share_instagram"></div></a>
							<a href="#"><div id="lightbox_share_linkedin"></div></a>
							<a href="#"><div id="lightbox_share_twitter"></div></a>
							<a href="#"><div id="lightbox_share_email"></div></a>
						</div> 
				  	</div>  <!-- end content -->
				</div> <!-- end overlay -->
			</div>	<!-- end search lightbox -->












			