<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<div class="title">
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>


<div class="entry">
<?php the_content('Читать далее &raquo;'); ?>
<div class="clear"></div>

</div>
</div>

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