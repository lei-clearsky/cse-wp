<?php
/**
 * Template Name: Homepage - CSE
 * The template for Home.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package College
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">

			<div class="sixteen columns">
	        <div class="slider">
	            <div class="flexslider">
	                <ul class="slides">
	                    <li>
	                      <a href="/admissions/visit-cse/"><img src="http://www.cse.edu/global/images/home_banner/2013-2014/ac-winter-970x395.jpg" alt="Come to the February 22 Women's College Open House and Adult Information Session"/></a>
	                      <div class="flexSlider-title">
	                        <div class="sliderHeading">Visit CSE</div> Looking for a place to belong? Want an education that feeds your mind, body, soul and spirit? Come to our Open House February 22 to learn about all CSE has to offer. <b><a href="/admissions/visit-cse/">SIGN UP HERE</a></b>
	                      </div>
	                    </li>
	                    <li>
	                      <a href="/foodsnutrition"><img src="http://www.cse.edu/global/images/home_banner/2013-2014/fn-sp14-970x395.jpg" alt="Study Foods and Nutrition at CSE" /></a>
	                      <div class="flexSlider-title">
	                        <div class="sliderHeading">Gain Practical Experience While Earning Your Degree</div> With a variety of degree and certificate choices, students in the Foods and Nutrition program are able to focus on a particular area within the field. <b><a href="/foodsnutrition">LEARN MORE</a></b>
	                      </div>
	                    </li>
	                    <li>
	                      <a href="/nursing"><img src="http://www.cse.edu/global/images/home_banner/2013-2014/henderson-winter-970x395.jpg" alt="Earn Your Nursing Degree" /></a>
	                    <div class="flexSlider-title">
	                      <div class="sliderHeading">Earn Your BSN or MSN</div> CSE's Nursing program is committed to educating registered nurses through scholarship and critical inquiry to become leaders in the spirit of service and social responsibility. <b><a href="/nursing">LEARN MORE</a></b>
	                      </div>
	                    </li>
	                    <li>
	                      <a href="/justicestudies"><img src="http://www.cse.edu/global/images/home_banner/2013-2014/santa-rita-winter-970x395.jpg" alt="Get Your Master's Degree Online" /></a>
	                      <div class="flexSlider-title">
	                      <div class="sliderHeading">Get Your Master's Degree Online</div> The Justice Studies Department offers a fully online M.A. in Justice Administration and Public Service which can completed in two years or less. <b><a href="/justicestudies">LEARN MORE</a></b>
	                      </div>
	                    </li>             
	                </ul>
	            </div>
	        </div>
	    </div>
		<?php get_template_part( 'content', 'page' ); ?>
		    
		</div><!-- container -->

		<div class="blueBackground">
		    <ul class="clearfix">
		      <li><a href="/visit/"><span>Visit CSE</span></a></li>
		      <li><a href="/apply/"><span>Apply Now</span></a></li>
		      <li><a href="/home/contact-us.dot"><span>Contact Us</span></a></li>
		    </ul>
		</div>

		<div class="container">
		    <div class="one-third column">
		    	<h2>Special Announcements</h2>
		    	<?php 
		    		$args = array( 'post_type' => 'announcement', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						the_content();
					endwhile;
		    	?>
		    </div>
			<div class="one-third column">
		    <!-- EventsQuery: +type:content +deleted:false +structureInode:73447  +( categories:home categories:admissionsAndAid categories:csePresents) +(date2:[07/19/2014 00:00:00 TO 07/19/2015 00:00:00]) +(+languageId:1* +live:true) -->				      
		    	<h2 class="title clearfix">
		      		<span>Upcoming Events</span>
		    	</h2>
		    <div style="clear:both;"></div>
		    <div class="eventSideBox">
		      <div class="leftC">
		        <div class="month">
		            Jul
		        </div>
		        <div class="day">
		           31
		        </div>
		        <div class="weekday">
		           Thu
		        </div>
		      </div>
		      <div class="eventInfo">
		        10:00 AM<br />
		        <h4><a href="/calendar/index.dot?id=0095cd18-79f9-48e4-aca2-3507acc2d9cd">Summer Visit Day - Women's College</a></h4>
		        <p>test</p>
		      </div>
		    </div>
		    <div class="eventSideBox">
		      <div class="leftC">
		        <div class="month">
		          Aug
		        </div>
		        <div class="day">
		          05
		        </div>
		        <div class="weekday">
		          Tue
		        </div>
		      </div>
		      <div class="eventInfo">
		        10:00 AM<br />
		        <h4><a href="/calendar/index.dot?id=3c37ddf3-cfe0-4df2-b66d-f12aefb9ff61">Summer Visit Day - Women's College</a></h4>
		      </div>
		    </div>
		    <!-- close listing -->
		    <a href="/calendar/">Full Calendar</a> 
		    <div style="clear:both;"></div><br/>

		  </div>
		  <div class="one-third column">
		    <h2>Online College Services</h2>
		    <div class="onlineCollegeServices">
		      <ul class="clearfix">
		        <li><a href="http://mail.google.com/a/cse.edu/" target="_blank"><span>CSE Email</span></a></li>
		        <li><a href="https://selfservice.cse.edu/Web" target="_blank"><span>Self Service</span></a></li>
		        <li><a href="http://www.cse.edu/evaluations" target="_blank"><span>Course Evaluation</span></a></li>
		        <li><a href="https://moodle.cse.edu/" target="_blank"><span>Moodle</span></a></li>
		      </ul>
		    </div>

		    <h4>First Time User?</h4><p><a href="https://apps.cse.edu/ois/forms/account.cfm"><b>Activate CSE Account</b></a> | <a href="/dept/information-systems/your-cse-account.dot"><b>Learn More</b></a><br /><a href="https://apps.cse.edu/ois/forms/resetPassword.cfm"><b>Forgot Password?</b></a></p>

		    </div>
		  </div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
