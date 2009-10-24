<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Тэги: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						Запись была опубликована
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/wordpress/time-since/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						<?php the_time('l, F jS, Y') ?> в <?php the_time() ?>
						в рубрике <?php the_category(', ') ?>.
						Вы можете следить за развитием темы посредством <?php post_comments_feed_link('RSS 2.0'); ?>.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							Вы можете <a href="#respond">оставить комментарий</a> или <a href="<?php trackback_url(); ?>" rel="trackback">трэкбек</a> с Вашего сайта.

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Комментирование закрыто, но Вы можете оставить <a href="<?php trackback_url(); ?> " rel="trackback">трэкбек</a> с Вашего сайта.

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							Вы можете оставить комментарий. Пингбеки запрещены.

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Комментирование и пингбеки запрещены.

						<?php } edit_post_link('Редактировать','','.'); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Извините, ни одна запись не подошла под Ваши критерии.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
