<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

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
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'kidh0_theme' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<div id="post_attr">
			<?php
				$tag_list = get_the_tag_list( '', ', ' );
				if ( '' != $tag_list ) {
					$utility_text = __( '<strong>Categoria:</strong> %1$s<br/><strong>Tags:</strong> %2$s', 'kidh0_theme' );
				} else {
					$utility_text = __( '<strong>Categoria:</strong> %1$s', 'kidh0_theme' );
				}
				printf(
					$utility_text,
					get_the_category_list( ', ' ),
					$tag_list,
					get_permalink(),
					the_title_attribute( 'echo=0' )
				);
			?>
			<?php edit_post_link( __( 'Edit', 'kidh0_theme' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
		<div id="sharing">
			<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
			<a href="http://twitter.com/share" class="twitter-share-button">Tweet</a>
			<g:plusone></g:plusone>
			<script type="text/javascript">
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
			<iframe src="http://www.facebook.com/plugins/like.php?app_id=217383808314194&amp;href=<?php echo urlencode(get_permalink()) ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe>
		</div>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
