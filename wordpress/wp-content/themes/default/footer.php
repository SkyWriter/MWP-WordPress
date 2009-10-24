<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
<div id="footer" role="contentinfo">
<!-- 
		Мы будем очень благодарны, если Вы поддержите WordPress и нашу руссификацию, оставив эту крохотную строчку внизу. 
		Это наше единственное вознаграждение за работу.
-->
	<p>
		<?php bloginfo('name'); ?> работает на
		<a href="http://wordpress.org/">WordPress</a>,
		<a href="http://mywordpress.ru/">русская версия WordPress от MyWordPress.Ru</a>
		<br /><a href="<?php bloginfo('rss2_url'); ?>">Записи (RSS)</a>
		и <a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>

<!-- Великолепный дизайн от Майкла Хайльмана (Michael Heilemann) - http://binarybonsai.com/kubrick/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
