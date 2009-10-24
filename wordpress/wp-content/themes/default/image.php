<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="entry">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<p class="postmetadata alt">
					<small>
						Запись написана <?php the_time('l, F jS, Y') ?> в <?php the_time() ?>
						и сохранена в рубрике <?php the_category(', ') ?>.
						<?php the_taxonomies(); ?>
						Вы можете следить за ответами посредством <?php post_comments_feed_link('RSS 2.0'); ?>.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							Вы можете <a href="#respond">оставить комментарий</a>, или <a href="<?php trackback_url(); ?>" rel="trackback">трэкбек</a> с Вашего сайта.

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Комментирование запрещено, но Вы можете оставить <a href="<?php trackback_url(); ?> " rel="trackback">трэкбек</a> с Вашего сайта.

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							Вы можете оставить комментарий. Пингбэки запрещены.

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Комментирование и пингбэки разрешены.

						<?php } edit_post_link('Редактировать запись.','',''); ?>

					</small>
				</p>

			</div>

		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Извините, ни одно из вложений не подошло по Вашим критериям.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
