<?php get_header(); ?>
        
                <div id="container">    
                        <div id="content">
                          
                          <div id="page">
    
    
      <IMG class="logo" src="Aspire-Brewing-Logo1_Glow.gif" width="300" height="300" alt="Aspire Brewing Logo">
    

    <div id="navigation_bar"></div>
      <ul id="navigation_left">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="beers.html">Beers</a></li>
      </ul>

      <ul id="navigation_right">
        <li><a href="contact.html">Contact</a></li>
        <li><a href="events.html">Events</a></li>  
        <li><a href="index.php">Blog</a></li>
      </ul>
    
    <div id="content_blog">
                
      <h1> Aspire Brewing Blog </h1>
                        
<?php the_post(); ?>
                                
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <h1 class="entry-title"><?php the_title(); ?></h1>
                                        <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>                                       
<?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                                        </div><!-- .entry-content -->
                                </div><!-- #post-<?php the_ID(); ?> -->                 
                        
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>                  
                        
                          
                  </div><!-- content_blog -->    
               </div><!-- page -->    
                        </div><!-- #content -->         
                </div><!-- #container -->
                
<?php get_sidebar(); ?> 
<?php get_footer(); ?>
