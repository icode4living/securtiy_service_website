<div class="main">
<?php if(have_posts()):while(have_posts()): the_post();?>
<div class="blog-content">
    <h1><?php the_title()?></h1>
<span><small><b>Authour</b>: John Doe</small> <smal><b><i class="fa-solid fa-calendar"></i></b> Feb 16, 2024</smal></span>
<img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php the_title();?>">
<article class="excerpt">
<p><?php the_content() ?></p>

</article>
</div>

<?php 
endwhile;
endif;
?>
</div>

<?php get_footer();?>