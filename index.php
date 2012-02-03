<?php get_header(); ?>


	
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
				<li><a href="">Blog</a></li>
			</ul>
		
		<div id="content_blog">
								
			<h1> Aspire Brewing Blog </h1>
								
					<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id=”post-<?php the_ID(); ?>”>
					<h2><a href=”<?php the_permalink() ?>” rel=”bookmark” title=”Permanent Link to <?php the_title_attribute(); ?>”><?php the_title(); ?></a></h2>
					<small><?php the_time(‘F jS, Y’) ?> <!– by <?php the_author() ?> –></small>

					<div>
					<?php the_content(‘Read the rest of this entry &raquo;’); ?>
					</div>

					<p><?php the_tags(‘Tags: ‘, ‘, ‘, ‘<br />’); ?> Posted in <?php the_category(‘, ‘) ?> | <?php edit_post_link(‘Edit’, ”, ‘ | ‘); ?> <?php comments_popup_link(‘No Comments &#187;’, ’1 Comment &#187;’, ‘% Comments &#187;’); ?></p>
					</div>

					<?php endwhile; ?>

					<div>
					<div><?php next_posts_link(‘&laquo; Older Entries’) ?></div>
					<div><?php previous_posts_link(‘Newer Entries &raquo;’) ?></div>
					</div>

					<?php else : ?>

					<h2>Not Found</h2>
					<p>Sorry, but you are looking for something that isn’t here.</p>
					<?php get_search_form(); ?>

					<?php endif; ?>


			

		</div> <!-- content blog-->
		
		
				
		
		
		
		
</div> <!-- page -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>