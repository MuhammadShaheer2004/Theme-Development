
<link rel="stylesheet" href="<?php get_template_directory_uri() ;?>/css/style.css">

<?php get_header();?>
<h1><?php the_title() ?></h1>
<?php the_post_thumbnail('medium');
?>

<p><?php  the_content() ?></p>