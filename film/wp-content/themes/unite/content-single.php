<?php
/**
 * @package unite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">

		<?php 
                    if ( of_get_option( 'single_post_image', 1 ) == 1 ) :
                        the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); 
                    endif;
                  ?>

		<h1 class="entry-title "><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php unite_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
  	
	<?php
	// THIS PULLS THE GENRE FROM THE DATABASE BASED ON POST ID
  	$genres = get_the_terms(get_the_ID(), 'genre');	
		foreach($genres as $genre)
		{
				 $genre->name;
		}

	// THIS PULLS THE COUNTRY FROM THE DATABASE BASED ON POST ID
  	$countries = get_the_terms(get_the_ID(), 'country');	
		foreach($countries as $country)
		{
				 $country->name;
		}

	// THIS PULLS THE YEAR THE FILM WAS RELEASED FROM THE DATABASE BASED ON POST ID
  	$years = get_the_terms(get_the_ID(), 'year');	
		foreach($years as $year)
		{
				 $year->name;
		}
	?>	


		<!-- WELL ELEMENT THAT DISPLAYS GENRE, COUNTRY OF ORIGIN, TICKET PRICE AND YEAR RELEASED -->
 		<div class="entry-content">
		<?php the_content(); ?>
		<div class="well" style="margin-top:13px; background-color:#eaf2ff">
        <i class="glyphicon glyphicon-home"></i> Country: <a href="/film/country/"<?php echo $country->name?> ><?php echo $country->name?></a><br> 

        <i class="glyphicon glyphicon-menu-hamburger"></i> Genre: <a href="/film/genre/"+<?php echo $genre->name;?>><?php echo $genre->name?></a><br/>
        <!-- Custom Fields -->
        <i class="glyphicon glyphicon-piggy-bank"></i> Ticket Price: $10<br/>
        <i class="glyphicon glyphicon-time"></i> Release Date: <?php echo $year->name?> <br/>    
        </div>

	<!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'unite' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'unite' ) );

			if ( ! unite_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				} else {
					$meta_text = '<i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s <i class="fa fa-tags"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				} else {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'unite' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
		<?php unite_setPostViews(get_the_ID()); ?>
		<hr class="section-divider">
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
