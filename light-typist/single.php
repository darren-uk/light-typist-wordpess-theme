<?php get_header(); ?>

<article>
<div class="wide-limit">
<?php
            
                while ( have_posts() ) : the_post();
        get_template_part( 'post', get_post_format() );
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif; 
      
        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );

    // End the loop.
    endwhile;
    ?>
         </div>  
</article>

<?php get_footer(); ?>