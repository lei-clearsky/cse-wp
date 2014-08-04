<?php
/**
 * Template Name: Left Navigation One Column
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

	<div class="headerWrap2" style = "background-color: #6394bf; padding: 10px;">
    <div class="container">
      <div class="sixteen columns">
        <?php the_title( '<h3>', '</h3>' ); ?>  
      </div>
    </div>
  </div>
  <div class="container">
  	<div class="four columns">
      <div class="showhideSub">
        <span class="title">Additional Menu</span>
        <span class="icon"><em></em><em></em><em></em><em></em></span>
      </div>
    <div class="side-nav">
      <ul>
      <?php 
      // If No Parent
      
      if(!$post->post_parent){


        $current_page = get_post($post->ID);
        $current_url = get_permalink($current_page);
        $current_title = $current_page->post_title;
        
        
        echo '<li><a href="'.$current_url.'">'.$current_title.'</a></li>';
        $pages = get_pages(array('child_of'=>$post->ID, 'parent'=>$post->ID));
        foreach($pages as $page){
          $list = $page->post_title;
          $url = get_permalink($page->ID);
          // List all menus
          if($post->ID == $page->ID){
            echo '<li class="current_page_item"><a href="'.$url.'">'.$list.'</a>';
          }else{
            echo '<li><a href="'.$url.'">'.$list.'</a>';
          }
                   
          echo '</li>';
        }
      //If Has Parent
      }else{

      
        $parent_page = get_post($post->post_parent);
        $parent_url = get_permalink($parent_page);
        $parent_title = $parent_page->post_title;
        
        
        echo '<li><a href="'.$parent_url.'">'.$parent_title.'</a></li>';
        $pages = get_pages(array('child_of'=>$post->post_parent, 'parent'=>$post->post_parent));
        foreach($pages as $page){
          $list = $page->post_title;
          $url = get_permalink($page->ID);
          // List all menus
          if($post->ID == $page->ID){
            echo '<li class="current_page_item"><a href="'.$url.'">'.$list.'</a>';
          }else{
            echo '<li><a href="'.$url.'">'.$list.'</a>';
          }
          
          // If the menu has child and this menu is the current page
          // List child menus below the menu
          $child_pages = get_pages(array('child_of'=>$page->ID));
          if(count($child_pages) != 0 && $post->ID == $page->ID){
            
            echo "<ul>";
            foreach($child_pages as $child_page){
              $child_list = $child_page->post_title;
              $child_url = get_permalink($child_page->ID);
              echo '<li><a href="'.$child_url.'">'.$child_list.'</a></li>';
            }
            echo "</ul>";
          }
          
          echo '</li>';
        }
      }
      ?>
      </ul>
    	
	</div>
  	<div class="leftCol">
    <div class="admissions-side-nav">
    	<!--Admission Promo-->
      	<?php get_template_part('content', 'admissionspromo')?>

    <!--Contact Info-->
    <!--Contact Info - If department name is not set, do not display contact box-->
	<?php while ( have_posts()&& !empty(get_field('department')) ) : the_post(); ?>       
      <div class="contact-box">
        <h2>Contact Information</h2>
        <h3><?php the_field( 'department' ); ?></h3>
          <p>
          	<?php the_field( 'location' ); ?>   
          </p>
          <p>
            <strong>Phone: </strong><?php the_field( 'phone' ); ?><br/>         
            <a href="mailto: <?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a> <br/>    
          </p>
          <p><strong>Office Hours:</strong><br/>
            <?php the_field( 'office_hour' ); ?>   
          </p>
      </div><!--End Contact Info-->

    <?php endwhile; ?>   
      </div>
    </div> 
    <!--Page Content-->   
    <div class="twelve columns" style="margin-top:10px;">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div>
	</div><!-- .container-->


<?php get_footer(); ?>
