<?php
get_header();
?>
<?php if( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>
<main>
	<?php	if ( have_posts() ) : while ( have_posts() ) : the_post();//記事があるか、記事をすべて取得 ?>
		<article class="news-article">
			<h1><?php the_title(); ?></h1>
			<div class="post-date">
				<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
			</div>
			<?php	the_content(); ?>
		</article>
	<?php endwhile;	endif; ?>
</main>
<?php
get_footer();
