<?php /**Template Name: Blog Page */ ?>
<?php get_header(); ?>
<div class="page-title">
    <div class="title-text">
        <span class="breadcrumbs"><a href="#">Home</a> > <a href="#">Contact Us</a></span>
        <h1>Blog</h1>

    </div>
</div>
<div class="main">
<?php 
    $args1 = array('order'=>'ASC',
  'orderby'=> 'title');
    $the_query1 =  new WP_Query($args1);
    ?>
<div class="blog-card">
    
<?php while($the_query1->have_posts()): $the_query1-> the_post(); ?>
<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title();?>">
<article class="excerpt">
    <h1><?php the_title()?></h1>
<p><?php the_excerpt() ?></p>
    <a href="<?php echo the_permalink() ?>" class="read-more">Read more..</a>

</article>
</div>
<?php 
endwhile;

?>
</div>

<?php get_footer();?>