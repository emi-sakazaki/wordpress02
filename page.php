<?php
get_header();
?>
<?php if( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' );
	endif;
	?>
</nav>
<main>
	<?php
	if ( have_posts() ) ://記事があるか
		while ( have_posts() ) ://記事すべてを取得
			the_post();
			the_title( '<h1 class="heading-title">', '</h1>' );
			the_content();
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
