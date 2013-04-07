<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">
<div class="subhead"><h1><?php previous_post('&laquo;  %', 'Предыдущие записи', 'no'); ?>
| <?php next_post('% &raquo;  ', 'Следующие записи', 'no'); ?> </h1></div>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="postmeta">
	<span class="author">Опубликовал <?php the_author(); ?> </span> <span class="clock">  <?php the_time('M - j - Y'); ?></span> <span class="comm"><?php comments_popup_link('0 комментариев', '1 комментарий', '% комментариев'); ?></span>
</div>

<div class="entry">
<?php the_content('Читать далее &raquo;'); ?>
<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>Страницы: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<div class="singleinfo">
<span class="category">Рубрики: <?php the_category(', '); ?> </span>
</div>

</div>
<?php comments_template(); ?>
<?php endwhile; else: ?>

		<h1 class="title">Не найдено</h1>
		<p>Извините, но по Вашему запросу ничего не было найдено.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<div class="clear"></div>

</div>

<div class="clear"></div>
</div>	
<?php get_footer(); ?>