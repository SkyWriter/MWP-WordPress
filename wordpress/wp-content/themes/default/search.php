<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Результаты поиска</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Старые записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Новые записи &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Ссылка на <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php the_tags('Тэги: ', ', ', '<br />'); ?> Написано в рубрике <?php the_category(', ') ?> | <?php edit_post_link('Редактировать', '', ' | '); ?>  <?php comments_popup_link('Нет комментариев &#187;', '1 комментарий &#187;', 'Комментариев: % &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Старые записи') ?></div>
			<div class="alignright"><?php previous_posts_link('Новые записи &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Ни одна запись не найдена. Попробуйте другие критерии поиска.</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
