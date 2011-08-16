<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'kidh0_theme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == $post->post_type ) : ?>
		<div class="entry-meta">
			<?php
				printf( __( '<span class="sep">Postado por: </span><span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span> em <a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a>', 'kidh0_theme' ),
					get_permalink(),
					get_the_date( 'c' ),
					get_the_date('d \d\e F \d\e Y'),
					get_author_posts_url( get_the_author_meta( 'ID' ) ),
					sprintf( esc_attr__( 'View all posts by %s', 'kidh0_theme' ), get_the_author() ),
					get_the_author()
				);
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'kidh0_theme' ) ); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'kidh0_theme' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'kidh0_theme' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Postado em: ', 'kidh0_theme' ); ?></span><?php the_category( ', ' ); ?></span>
		<span class="sep"> | </span>
		<?php the_tags( '<span class="tag-links">' . __( 'Tags: ', 'kidh0_theme' ) . '</span>', ', ', '<span class="sep"> | </span>' ); ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'kidh0_theme' ), __( '1 Comment', 'kidh0_theme' ), __( '% Comments', 'kidh0_theme' ) ); ?></span>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
