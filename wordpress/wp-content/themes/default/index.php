<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Читать полностью &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Тэги: ', ', ', '<br />'); ?> Написано в рубрике <?php the_category(', ') ?> | <?php edit_post_link('Редактировать', '', ' | '); ?>  <?php comments_popup_link('Нет комментариев &#187;', '1 комментарий &#187;', 'Комментариев: % &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Старые записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Новые записи &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Не найдено</h2>
		<p class="center">Извините, но, похоже, Вы ищите того, чего здесь нет.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
