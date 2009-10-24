<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar" role="complementary">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				<?php get_search_form(); ?>
			</li>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>Вы просматриваете архив рубрики <?php single_cat_title(''); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>Вы просматриваете архив блога <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> за <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>Вы просматриваете архив блога <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> за <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>Вы просматриваете архив блога <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> за
			<?php the_time('Y'); ?> год.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>Вы искали по блогу <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> фразу
			<strong>'<?php the_search_query(); ?>'</strong>. Если Вам не удастся найти необходимую информацию, Вы можете попробовать одну из ссылок.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>Вы просматриваете архив блога <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a>.</p>

			<?php } ?>

			</li>
		<?php }?>
		</ul>
		<ul role="navigation">
			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Архив</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
		</ul>
		<ul>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>Мета</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Корретный <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://mywordpress.ru/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'kubrick'); ?>">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

