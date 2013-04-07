<?php get_header(); ?>

<div id="casing">
<div class="incasing">

<div class="topbar">
<div class="subhead">

		<?php if (have_posts()) : ?>

<h1>		<?php
				$mySearch =& new WP_Query("s=$s & showposts=-1");
				$num = $mySearch->post_count;
				echo $num.' search results for '; the_search_query();
?> за <?php  get_num_queries(); ?> <?php timer_stop(1); ?> секунд.

</div>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</div>

<div id="content" >

<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="postmeta">
	<span class="author">Опубликовал <?php the_author(); ?> </span> <span class="clock">  <?php the_time('M - j - Y'); ?></span> <span class="comm"><?php comments_popup_link('0 комментариев', '1 комментарий', '% комментариев'); ?></span>
</div>

<div class="entry">
<?php the_excerpt(); ?>
<div class="clear"></div>
</div>


</div>
<?php endwhile; ?>

<div class="clear"></div>
<?php getpagenavi(); ?>

<?php else : ?>

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